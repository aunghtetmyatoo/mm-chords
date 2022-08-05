<x-layout>
    @foreach ($artists as $artist)
        {{ $artist->name }}
    @endforeach
</x-layout>
