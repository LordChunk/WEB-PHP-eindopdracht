<?php

namespace App\Http\Controllers;

use App\Models\show;
use Illuminate\Http\Request;
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
        //
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
        $movie = DB::table('movies')
            ->select('movies.*')
            ->where('movies.id', '=', $show->movie_id)
            ->first();

        $room = DB::table('rooms')
            ->select('rooms.*')
            ->where('rooms.id', '=', $show->room_id)
            ->first();

        return view('shows.show', compact('show', 'movie', 'room'));
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
     * Books a show.
     *
     * @param  \App\Models\show  $show
     * @param int $column
     * @param int $row
     * @return \Illuminate\Http\Response
     */
    public function book(show $show, int $column, int $row)
    {
        $movie = DB::table('movies')
            ->select('movies.*')
            ->where('movies.id', '=', $show->movie_id)
            ->first();

        return view('shows.book', compact('show', 'movie', 'column', 'row'));
    }

}
