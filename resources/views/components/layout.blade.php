<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'MMChords' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
</head>

<body>
    <audio controls hidden id="guitar1">
        <source src="{{ URL::asset('songs/guitar1.mp3') }}" type="audio/mpeg">
    </audio>

    <audio controls hidden id="guitar2">
        <source src="{{ URL::asset('songs/guitar2.mp3') }}" type="audio/mpeg">
    </audio>


    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ URL::asset('images/logo.svg') }}" alt="Logo"
                    width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="{{ route('artist.index') }}">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('song_chord.index') }}">Song's Chords</a>
                    </li>
                </ul>
                <form class="d-flex artist-search" action="#">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search By Artist (Type MM)"
                            aria-label="Search By Artist" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <form class="d-flex song-search" action="#">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search By Song's Name (Type MM)"
                            aria-label="Search By Song's Name" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <div class="footer">
        <div class="d-flex justify-content-center align-item-center">
            <span>©Copyright 2022, mmchords.com <b>All Rights Reserved.</b></span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var x = document.getElementById("guitar1");
        var y = document.getElementById("guitar2");

        function playGuitar1() {
            x.play();
        }

        function playGuitar2() {
            y.play();
        }

        // var swiper = new Swiper(".mySwiper", {
        //     slidesPerView: 6,
        //     spaceBetween: 30,
        //     autoplay: {
        //         delay: 5500,
        //         disableOnInteraction: false,
        //     },
        //     loop: false,
        //     loopFillGroupWithBlank: true,
        //     navigation: {
        //         nextEl: ".swiper-button-next",
        //         prevEl: ".swiper-button-prev",
        //     },
        // });

        var swiper = new Swiper('.mySwiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

</body>

</html>
