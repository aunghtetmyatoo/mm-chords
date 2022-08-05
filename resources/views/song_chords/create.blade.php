<html>
<head>
    <title>How to Use Summernote WYSIWYG Editor with Laravel? - ItSolutionStuff.com</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action={{ route('song_chord.store') }} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label><strong>Artist :</strong></label>
                                <select name="artist_id" class="form-select" aria-label="Default select example">
                                    @foreach ($artists as $artist)
                                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label><strong>Song Name :</strong></label>
                                <input type="text" name="song_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><strong>Lyrics & Chords :</strong></label>
                                <textarea class="summernote" name="lyrics_and_chords"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote({
        placeholder: "Let's Rock",
        tabsize: 2,
        height: 300,
      });
        });
    </script>
</body>
</html>
