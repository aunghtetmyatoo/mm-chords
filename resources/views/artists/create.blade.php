<x-layout>
    <div class="container">
        <h1 class="row justify-content-center m-5">Artists</h1>
        <div class="row justify-content-center">
            <form method="POST" action={{ route('artist.store') }} enctype="multipart/form-data" class="col-6">
                @csrf
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="photo" id="photo">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="bio" class="col-sm-2 col-form-label">Bio</label>
                  <div class="col-sm-10">
                    <textarea name="bio" class="form-control" id="bio"></textarea>
                  </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary col-3">Add</button>
                </div>
              </form>
        </div>
    </div>
</x-layout>
