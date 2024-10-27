@extends('master')

@section('isi')

<form class="w-full max-w-sm">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Judul
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{ $data->nama }}">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $data->deskripsi }}"></textarea>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"></div>
    <label class="md:w-2/3 block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" type="checkbox">
      <span class="text-sm">
        Send me your newsletter!
      </span>
    </label>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
        Sign Up
      </button>
    </div>
  </div>
</form>











<!----------------------------------------------------------------------------------------------!>
    <div class="container p-4">
        <div class="panel panel-primary col-md-8">
            <div class="panel-heading mt-5">
                <h4 class="text-2xl font-bold font-green"><strong>Upload Foto</strong></h4>
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
                        {{-- <label for="id_marker" class="form-label">ID</label> --}}
                        <input type="hidden" class="form-control rounded-0" id="id_marker" name="id_marker"
                            value="{{ $data->id }}" readonly />
                    </div>
                    <br />
                    <div class="col-md-10">
                        <label for="judul" class="form-label fw-bold">Judul</label>
                        <input type="text" class="form-control rounded-0" id="judul" name="judul"
                            value="{{ $data->nama }}" readonly />
                    </div>
                    <br />
                    @if ($data->deskripsi == '')
                        <div class="col-12">
                            <label for="deskripsi" class="form-label fw-bold" rows="4"
                                cols="40">Deskripsi</label>
                            <textarea class="form-control rounded-0" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                    @endif
                    <br />
                    <br />
                    <div class="col-12">
                        <label for="deskripsi" class="form-label"></label>
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
