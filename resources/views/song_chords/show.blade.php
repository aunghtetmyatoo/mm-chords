<x-layout>
    <a href="{{ route('song_chord.edit', ['id' => $song_chord->id]) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('song_chord.delete', ['id' => $song_chord->id]) }}" class="btn btn-info">Delete</a>

    {{-- <form action="{{ route('song_chord.delete', ['id' => $song_chord->id]) }}" method="POST">
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form> --}}
    <div class="box">
        <div class="title">
            <div>{{ $song_chord->song_name }}</div>
            <div>{{ $song_chord->artist->name }}</div>
        </div>

        {!! $song_chord->lyrics_and_chords !!}
    </div>
</x-layout>
