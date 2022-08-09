<x-layout>
    {{-- @foreach ($artists as $artist)
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
                @foreach ($artists as $artist)
                    <div class="swiper-slide">
                        <div class="col img-card">
                            <a href="">
                                <img src="{{ asset('images/artists/') . '/' . $artist->photo }}" alt="" width="196"
                                    height="196">
                            </a>
                            <div class="artist-name">
                                {{ $artist->name }}
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
