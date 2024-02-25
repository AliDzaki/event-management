@extends('template')

@section('content')
    <div class="container">
        <div class="mt-5">
            <h1>Add event</h1>
            <p>Di halaman ini anda dapat menambahkan event</p>
        </div>
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <img id="imagepreview" src="https://via.placeholder.com/400" class="img-fluid" alt="Dummy Image">
                    </div>
                    <div class="form-group mt-2">
                        <label for="poster">Pilih Gambar</label>
                        <input type="file" class="form-control-file" id="poster" name="poster" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" placeholder="">
                        <label for="title">judul</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="start" placeholder="">
                        <label for="start">Mulai Event</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="end" placeholder="">
                        <label for="end">Berakhir Event</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea type="text" name="" id="description" class="form-control" style="height: 15rem"></textarea>
                        <label for="description">Deskripsi</label>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('poster').addEventListener('change', function(event) {
            const previewImage = document.getElementById('imagepreview');
            previewImage.src = URL.createObjectURL(event.target.files[0]);
        })
        
    </script>
@endsection
