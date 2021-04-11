<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\RestaurantReservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all()->sortBy('restaurant_type_id');
        return View('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant, bool $created = false)
    {
        $availableTimeSlots = [];

        $timeSlots =
            DB::table('restaurant_reservations')
            ->select(DB::raw('time_slot, sum(guests) as guest_count, count(*) as reservation_count'))
            ->where('restaurant_id', '=', $restaurant->id)
            ->where('time_slot', '>', Carbon::now())
            ->groupBy('time_slot')
            ->orderBy('time_slot')
            ->get();

        // Set correct time
        $time = $this->GetClosestHalfHour(Carbon::now());

        // Remove fully booked time slots                    // Adjust for current timezone because Carbon can't just ignore timezones all together
        while ($time < Carbon::parse($restaurant->closes_at)->addHours(2)->addMinutes(-30)) {
            // Stop if restaurant is already closed for today or if the current time is the closing time
            if(Carbon::parse($restaurant->closes_at)->isBefore((clone $time)->addMinute())) break;

            $foundOverlapping = false;
            foreach ($timeSlots as $timeSlot) {
                // Check if timeslot is the same as the current timeslot we're looking for
                $carbonTimeStamp = Carbon::parse($timeSlot->time_slot)->toString();
                if($carbonTimeStamp !== $time->toString()) continue;
                $foundOverlapping = true;
                // Check if not all seats are booked and if there are no more than 10 reservations
                if ($timeSlot->guest_count-0 < $restaurant->seats_available && $timeSlot->reservation_count < 10) {
                    // Add item to available time slots
                    array_push($availableTimeSlots, $time->toTimeString('minute'));
                }
            }

            if(!$foundOverlapping) {
                array_push($availableTimeSlots, $time->toTimeString('minute'));
            }

            $time = $time->addMinutes(30);
        }

        return view('restaurants.show', compact('restaurant', 'availableTimeSlots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }

    public function makeReservation(Request $request) {
        $validated = $request->validate([
            'guest_count' => 'required|min:1', // <- min doesn't seem to work here 🤷
            'time' => 'required',
            'restaurant_id' => 'required'
        ]);

        if($validated['guest_count'] < 1) {
            throw ValidationException::withMessages(['guest_count' => 'You need to have make a reservation for at least 1 guest.']);
        }

        $carbonTime = Carbon::parse($validated['time'])->toISOString(true);

        $bookedSeats =
            DB::table('restaurant_reservations')
            ->select('*')
            ->where('restaurant_id', '=', $validated['restaurant_id'])
            ->where('time_slot', '=', $carbonTime)
            ->sum('guests');

        $availableSeats = DB::table('restaurants')
            ->where('id', '=', $validated['restaurant_id'])
            ->sum('seats_available');

        if($bookedSeats + $validated['guest_count'] > $availableSeats) {
            throw ValidationException::withMessages(['guest_count' => 'There were not enough seats available for your reservation. There are currently '.$availableSeats-$bookedSeats.' seats available.']);
        }

        RestaurantReservation::create([
            'restaurant_id' => $validated['restaurant_id'],
            'user_id' => Auth::user()->getAuthIdentifier(),
            'time_slot' => $carbonTime,
            'guests' => $validated['guest_count'],
        ]);

        return back();
    }

    public static function GetClosestHalfHour(Carbon $time) {
        // Set correct time
        $time->setSecond(0)->floorSecond(); //floor second takes care of milli- and microseconds

        // Get closest half hour
        if($time->minute <= 30) {
            $time->addMinutes(30 - $time->minute);
        } else {
        $time->addMinutes(60 - $time->minute);
        }

        return $time;
    }
}
