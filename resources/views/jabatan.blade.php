@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Jabatan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center animated bounceInRight slower" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- konten disini  -->
                    
                    <a href="jabatan/create" class="btn btn-success mb-3">Tambah Data Jabatan</a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">NAMA PENGGGUNA</th>
                          <th scope="col">NAMA JABATAN</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        @foreach($jabatan as $data)
                        <tr>
                          <th scope="row">{{ $i }}</th>
                          <td>
                            <ol>
                              @foreach($data->users as $user)
                              <li> {{ $user->name }} </li>
                              @endforeach
                            </ol>
                          </td>
                          <td>{{ $data->nama }}</td>
                          <td>
                              <form class="float-left" action="/jabatan/{{$data->id_jabatan}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger btn-sm mr-2 mt-1">Hapus</button>
                              </form>
                           		<a href="jabatan/{{ $data->id_jabatan }}/edit" class="btn btn-primary btn-sm mt-1">Ubah</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
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
