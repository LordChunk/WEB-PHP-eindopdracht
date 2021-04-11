<?php

namespace App\Http\Controllers;

use App\Models\show;
use App\Models\ShowReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();
        return view('shows.index', compact('shows'));
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
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function show(show $show)
    {
        $movie = $this->getMovieFromId($show->movie_id);

        $room = DB::table('rooms')
            ->select('rooms.*')
            ->where('rooms.id', '=', $show->room_id)
            ->first();

        $reservedSeats = DB::table('show_reservations')
            ->select('show_reservations.column', 'show_reservations.row')
            ->where('show_reservations.show_id', '=', $show->id)
            ->get();

        $blockedSeats = [];
        for ($i = 0; $i > $room->column; $i++) {
            $blockedSeats[$i] = [];
        }

        foreach ($reservedSeats as $reservedSeat) {
            if($reservedSeat->column > 0) {
                $blockedSeats[$reservedSeat->column - 1][$reservedSeat->row] = true;
            }
            $blockedSeats[$reservedSeat->column][$reservedSeat->row] = true;
            if($reservedSeat->column < $room->column) {
                $blockedSeats[$reservedSeat->column + 1][$reservedSeat->row] = true;
            }
        }

        return view('shows.show', compact('show', 'movie', 'room', 'blockedSeats'));
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

    private function getMovieFromId(int $id) {
        return DB::table('movies')
            ->select('movies.*')
            ->where('movies.id', '=', $id)
            ->first();
    }
}
