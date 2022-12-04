@extends('layouts.default') 

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1> Tambah Mahasiswa </h1>
                <div class="card">
                    <div class="card-body">
                        <form class="mt-3" action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputNim1" class="form-label">NIM</label>
                                <input type="number" class="form-control" id="exampleInputNim1" aria-describedby="nimHelp"
                                placeholder="Masukan nomor fakultas dan nim  anda ex 7123456789">
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNama1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputNama1"
                                placeholder="Masukan nama lengkap anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUmur1" class="form-label">Umur</label>
                                <input type="number" class="form-control" id="exampleInputUmur1"
                                placeholder="Masukan umur anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAlamat1" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputAlamat1"
                                placeholder="Masukan Alamat lengkap anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputKota1" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="exampleInputKota1"
                                placeholder="Masukan nama lengkap anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNama1" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="exampleInputNama1"
                                placeholder="Masukan nama lengkap anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNama1" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" id="exampleInputNama1"
                                placeholder="Masukan nama lengkap anda">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
        
                            <div class="form-group mt-2">
                                <a href="{{ url('/') }}" type="submit" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>


@endsection