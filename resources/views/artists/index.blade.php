<x-layout>
    {{-- <div class="search-box">
        <input class="search-txt" type="text" name=" " placeholder="Type to search"> </input>
        <a href="#" class="search-btn">
            <!--font-awesome-->
            <i class="fa-solid fa-magnifying-glass"></i>
        </a>
    </div> --}}

    <div class="artist container-fluid d-flex">

        {{-- <div>
            <img src="{{ URL::asset('images/rock.png') }}" alt="" width="300">
        </div> --}}


        <div class="swiper mySwiper align-self-center">
            <div class="swiper-wrapper">
                @foreach ($artists as $artist)
                    <div class="swiper-slide">
                        <div class="col img-card">
                            <a href="{{ route('artist.show', ['id' => $artist->id]) }}">
                                <img src="{{ asset('images/artists/') . '/' . $artist->photo }}" alt="" width="250"
                                    height="250">
                            </a>
                            <div class="artist-name">
                                {{ $artist->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>
</x-layout>
