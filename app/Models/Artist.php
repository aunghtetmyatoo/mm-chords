<?php

namespace App\Models;

use App\Models\SongChord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'bio'];

    public function song_chords()
    {
        return $this->hasMany(SongChord::class);
    }
}
