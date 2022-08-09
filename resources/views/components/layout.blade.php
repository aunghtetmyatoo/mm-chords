<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'MMChords' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body {
            height: 100vh;
            background: linear-gradient(-45deg, #b82e1f, #28313b, #434343, #2c3e50);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            font-family: 'Courier New', Courier, monospace;
            /* background-image: url('images/bg1.jpg');
            background-size: cover; */
            /* backdrop-filter: blur(2px); */
        }

        main {
            background: linear-gradient(-45deg, #b82e1f, #28313b, #434343, #2c3e50);

        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .img-card {
            text-align: center;
        }

        .img-card img {
            border-radius: 0.95rem !important;
        }

        .artist-name {
            margin-top: 0.5rem;
            color: #fff;
        }

        .search-box {
            margin-top: 5rem;
            position: fixed;
            /* top: 50%; */
            left: 50%;
            transform: translate(-50%, -50%);
            background: #252525;
            height: 60px;
            border-radius: 40px;
            padding: 10px;

        }

        .search-box:hover>.search-txt {
            width: 240px;
            padding: 0 6px;
        }

        .search-box:hover>.search-btn {
            background: whitesmoke;
        }

        .search-btn {
            color: salmon;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-decoration: none;
            background: #252525;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .search-txt {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: whitesmoke;
            font-size: 16px;
            transition: 0.4s;
            line-height: 40px;
            width: 0px;
        }

        .artist {
            margin-top: 10rem;
        }


        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <div class="curve d-flex align-items-center justify-content-evenly">
        <div onclick="playAudio()" type="button"><img src="{{ URL::asset('images/left.png') }}" alt="" width="300"></div>
        <a href="{{ route('artist.index') }}">
            <button class="nav-btn striped-shadow blue"><span>Artists</span></button>
        </a>
        <a href="/" class="logo" onclick="playAudio()"><img src="{{ URL::asset('images/logo.png') }}"
                alt=""></a>
        <a href="{{ route('song_chord.index') }}">
            <button class="nav-btn striped-shadow dark"><span>Chords</span></button>
        </a>
        <div onclick="playAudio()" type="button"><img src="{{ URL::asset('images/right.png') }}" alt="" width="300"></div>
    </div>


    {{-- <button onclick="playAudio()" type="button">Play Audio</button> --}}
    <audio controls hidden id="myAudio">
        <source src="{{ URL::asset('songs/logo.mp3') }}" type="audio/mpeg">
    </audio>
    <div class="bb">

    </div>


        {{ $slot }}
    {{-- {{ $scripts ?? '' }} --}}



    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var x = document.getElementById("myAudio");

        function playAudio() {
            x.play();
        }

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 6,
            spaceBetween: 30,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            loop: false,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>
