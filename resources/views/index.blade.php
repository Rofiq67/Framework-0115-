@extends('layouts.default') 

@section('content')
    <section>
      <!--table-->
      <div class="container mt-5">
        <h1> Mahasiswa PDIP UNIVERSITY </h1>
        <a href="{{ url('create') }}" class="btn btn-primary"> Add </a>
        <div class="card mt-3">
          <div class="card-body">
              <table class="table-danger">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Umur</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Kota</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Jurusan</th>
                          <th scope="col">Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                          @foreach( $data as $key=>$mahasiswa)
                          <tr>
                              <td>{{ ++$no }}</td>
                              <td>{{ $mahasiswa->nim }}</td>
                              <td>{{ $mahasiswa->nama }}</td>
                              <td>{{ $mahasiswa->umur }}</td>
                              <td>{{ $mahasiswa->alamat }}</td>
                              <td>{{ $mahasiswa->kota }}</td>
                              <td>{{ $mahasiswa->kelas }}</td>
                              <td>{{ $mahasiswa->jurusan    }}</td>
                              <td>
                                <a href="{{ url('/show/' . $mahasiswa->nim) }}" class="btn btn-warning"> Edit </a>
                                <a href="{{ url('/destroy/'.$mahasiswa->nim) }}" class="btn btn-danger"> Hapus </a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>




@endsection