<x-layout>
    {{-- @foreach ($song_chords as $artist)
        {{ $artist->name }}
        <img src="{{asset('images/').'/'.$artist->photo}}" alt="" width="200" height="200"><br>
    @endforeach --}}
    <div class="search-box">
        <input class="search-txt" type="text" name=" " placeholder="Type to search"> </input>
        <a href="#" class="search-btn">
            <!--font-awesome-->
            <i class="fa-solid fa-magnifying-glass"></i>
        </a>
    </div>

    <div class="container-fluid artist">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($song_chords as $song_chord)
                    <div class="swiper-slide">
                        <div class="col img-card">
                            {{ $song_chord->artist->name }}
                            {{-- <a href="">
                                <img src="{{ asset('images/song_chords/') . '/' . $song_chord->photo }}" alt="" width="196"
                                    height="196">
                            </a> --}}
                            <a href="{{ route("song_chord.show", ['id' => $song_chord->id]) }}">
                                {!! $song_chord->lyrics_and_chords !!}
                            </a>
                            <div class="song_chord-name">
                                {{ $song_chord->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>
</x-layout>
