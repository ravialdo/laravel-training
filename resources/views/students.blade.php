@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Students</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center animated bounceInRight slower" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- konten disini  -->


                    <a href="students/create" class="btn btn-success mb-3">Tambah Data Siswa</a>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">NIS</th>
                          <th scope="col">NAMA</th>

                          <th scope="col">AKSI</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        @foreach($siswa as $data)
                        <tr>
                          <th scope="row">1</th>
                          <td>{{ $data->nis }}</td>
                          <td>{{ $data->nama}}</td>

                          <td>

                              <form class="float-left" action="/students/{{$data->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm mr-2 mt-1">Hapus</button>
                            </form>

                           		<a href="students/{{ $data->id }}/edit" class="btn btn-primary btn-sm mt-1">Ubah</a>

                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>

                    <!-- akhir konten -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
