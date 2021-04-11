<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\FestivalTicketUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FestivalTicketUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Festival $festival)
    {
        return view('festivalticketusers.create', compact('festival'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => ['required',' mimetypes:jpeg,bmp,png'],
            'number_of_tickets' => ['required', 'max:4'],
            'start_day' => ['required', 'ite:end_day'],
            'end_day' => ['required'],
        ]);

        $data->festival_id = $request->festival_id;
        $data->user_id = Auth::user()->getAuthIdentifier()->id;

        $festivalTicketUser = FestivalTicketUser::create($data);

        return redirect()->route('customers.show', $festivalTicketUser);
    }

    /**
     * Display the specified resource.
     *
     * @param FestivalTicketUser $festivalTicketUser
     * @return \Illuminate\Http\Response
     */
    public function show(FestivalTicketUser $festivalTicketUser)
    {
        return view('festivalticketusers.show', compact('festivalTicketUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function edit(show $show)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, show $show)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function destroy(show $show)
    {
        //
    }

    /**
     * Preview a booking.
     *
     * @param  \App\Models\show  $show
     * @param int $column
     * @param int $row
     * @return \Illuminate\Http\Response
     */
    public function book(show $show, int $column, int $row)
    {
        $movie = $this->getMovieFromId($show->movie_id);
        $confirmed = false;

        return view('shows.book', compact('show', 'movie', 'column', 'row', 'confirmed'));
    }

    /**
     * Confirm a booking.
     *
     * @param  \App\Models\show  $show
     * @param int $column
     * @param int $row
     * @return \Illuminate\Http\Response
     */
    public function bookConfirm(show $show, int $column, int $row)
    {
        $movie = $this->getMovieFromId($show->movie_id);
        $confirmed = true;

        $userId = Auth::user()->getAuthIdentifier();

        ShowReservation::create([
            'show_id' => $show->id,
            'user_id' => $userId,
            'column' => $column,
            'row' => $row,
        ]);

        return view('shows.book', compact('show', 'movie', 'column', 'row', 'confirmed'));
    }

    private function getFestivalFromId(int $id) {
        return DB::table('festival')
            ->select('festival.*')
            ->where('festival.id', '=', $id)
            ->first();
    }
}
