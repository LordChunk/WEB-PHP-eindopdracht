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

    public function buyTickets(Festival $festival)
    {
        return view('festivalticketusers.create', compact('festival'));
    }

    public function storeTickets(Request $request)
    {
        $data = $request->validate([
            'photo' => ['image'],
            'number_of_tickets' => ['required', 'max:4'],
            'start_day' => ['required', 'lte:end_day'],
            'end_day' => ['required'],
            'festival_id',
            'user_id',
        ]);

        $festivalTicketUser = FestivalTicketUser::create([
            'photo' => $request->photo,
            'number_of_tickets' => $request->number_of_tickets,
            'start_day' => $request->start_day,
            'end_day' => $request->end_day,
            'festival_id' => $request->festival_id,
            'user_id' => Auth::user()->getAuthIdentifier(),
        ]);

        //return view('festivals.index', $request->festival_id);
        return redirect()->route('festivalticketusers.show', $festivalTicketUser);
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
