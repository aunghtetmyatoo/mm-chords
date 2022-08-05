<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SongChord extends Model
{
    use HasFactory;

    protected $fillable = ['artist_id', 'song_name', 'lyrics_and_chords'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
