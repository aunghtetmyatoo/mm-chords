<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\SongChord;
use Illuminate\Http\Request;

class SongChordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songChords = SongChord::all();

        return view('song_chords.index', compact('songChords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();

        return view('song_chords.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SongChord::create([
            'artist_id' => $request->artist_id,
            'song_name' => $request->song_name,
            'lyrics_and_chords' => $request->lyrics_and_chords,
        ]);

        return redirect('/song_chord');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $songChord = SongChord::findOrFail($request->id);

        return view('song_chords.show', compact('songChord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('song_chords.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $songChord = SongChord::findOrFail($request->id);

        $songChord->update([
            'artist_id' => $request->artist_id,
            'song_name' => $request->song_name,
            'lyrics_and_chords' => $request->lyrics_and_chords,
        ]);

        return redirect('/song_chord');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $songChord = SongChord::findOrFail($id);

        $songChord->destroy();

        return back();
    }
}
