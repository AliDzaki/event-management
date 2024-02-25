@extends('template')

@section('content')
    <div>
        <div class="container" id="detail-event">
            <form action="">
                @csrf
                <div class="mt-5">
                    <h1 class="text-center">Nama Event</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="https://via.placeholder.com/400" alt="Image Preview" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>Detail Event</h4>
                        <div class="d-flex">
                            <div class="col-md-4">
                                <p>Tanggal mulai</p>
                                <p>Tanggal berahir</p>
                                <p>Deskripsi</p>
                            </div>
                            <div class="col-md-6">
                                <p>25-02-2024</p>
                                <p>25-02-24</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aliquam quisquam molestiae
                                    sapiente ab.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mx-2" id="update">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
        <div class="container mt-5 mb-5" id="update-detail">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" placeholder="">
                    <label for="title">judul</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <img id="imagepreview" src="https://via.placeholder.com/400" class="img-fluid"
                                alt="Dummy Image">
                        </div>
                        <div class="form-group mt-2">
                            <label for="poster">Pilih Gambar</label>
                            <input type="file" class="form-control-file" id="poster" name="poster" />

                        </div>
                    </div>
                    <div class="col-md-6">

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
                <div class="d-flex justify-content-end">
                    <button class="btn btn-success mx-2" type="submit">Update</button>
                    <button class="btn btn-secondary" id="cancel" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const detailEvent = document.getElementById('detail-event');
        const updateDetail = document.getElementById('update-detail');
        const btnupdate = document.getElementById('update');
        const btncancel = document.getElementById('cancel');

        updateDetail.style.display = 'none';

        btnupdate.addEventListener('click', function(e) {
            e.preventDefault();
            detailEvent.style.display = 'none';
            updateDetail.style.display = 'block';
        })

        btncancel.addEventListener('click', function(e){
            e.preventDefault();
            updateDetail.style.display = 'none';
            detailEvent.style.display = 'block';
        })
    </script>
@endsection
