<x-layout>
    <div class="box">
        <div>{{ $artist->name }}</div>
        <div><img src="{{ asset('images/artists/') . '/' . $artist->photo }}" alt="" width="196" height="196">
        </div>
        <div>
            @foreach ($artist->song_chords as $song_chord)
                {{ $song_chord->song_name }}
            @endforeach
        </div>
        <a href="{{ route('artist.edit', ['id' => $artist->id]) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('artist.delete', ['id' => $artist->id]) }}" class="btn btn-danger">Delete</a>
    </div>
</x-layout>
