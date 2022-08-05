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
</head>

<body>
    <div class="curve d-flex align-items-center justify-content-center">
        <a href="{{ route('artist.index') }}">
            <button class="nav-btn striped-shadow blue"><span>Artists</span></button>
        </a>
        <a href="/" class="logo" onclick="playAudio()"><img src="{{ URL::asset('images/logo.png') }}"
                alt=""></a>
        <a href="{{ route('song_chord.index') }}">
            <button class="nav-btn striped-shadow dark"><span>Chords</span></button>
        </a>
    </div>


    <button onclick="playAudio()" type="button">Play Audio</button>
    <audio controls hidden id="myAudio">
        <source src="{{ URL::asset('songs/logo.mp3') }}" type="audio/mpeg">
    </audio>


    {{ $slot }}
    {{-- {{ $scripts ?? '' }} --}}



    <script type="text/javascript">
        var x = document.getElementById("myAudio");

        function playAudio() {
            x.play();
        }

        $(document).ready(function(e) {
            e.preventDefault()
            var x = document.getElementById("myAudio");
            x.play();
        });
    </script>

</body>

</html>
