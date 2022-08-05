<x-layout>
    @foreach ($songChords as $songChord)
        {!! $songChord->lyrics_and_chords !!}
    @endforeach
</x-layout>
