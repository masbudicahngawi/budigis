@extends('master')

@section('isi')
    <div class="container">
        <div class="panel panel-primary col-md-8">
            <div class="panel-heading mt-5">
                <h4><strong>Upload Foto</strong></h4>
            </div>
            <div class="panel-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form action="/poi/proses-upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-2">
                        <label for="id_marker" class="form-label">ID</label>
                        <input type="text" class="form-control rounded-0" id="id_marker" name="id_marker"
                            value="{{ $data->id }}" readonly />
                    </div>
                    <br />
                    <div class="col-md-10">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control rounded-0" id="judul" name="judul"
                            value="{{ $data->nama }}" readonly />
                    </div>
                    <br />
                    <br />
                    <div class="col-12">
                        <label for="deskripsi" class="form-label">File Foto</label>
                        <input type="file" name="image" id="inputImage">
                    </div>
                    <br />
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


<form class="row g-3">

</form>
