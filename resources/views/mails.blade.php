@extends('layouts.app')

@section('content')
<div class="container">

  <a class="btn btn-primary my-3" href="{{ url('/students') }}"> Dashboard Students</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Mails</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center animated bounceInRight slower" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- konten disini  -->

                    <a href="Mails/create" class="btn btn-success mb-3">Tambah Data Surat</a>

                    <table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Kode</th>
                          <th scope="col">Tipe Surat</th>
                          <th scope="col">Pembuat</th>
                          <th scope=col">Kategori</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        @foreach($surat as $data)
                        <tr>
                          <th scope="row">1</th>
                          <td>{{ $data->mail_code }}</td>
                          <td>{{ $data->mailType->type }}</td>

                          @if( $data->user->name)
                            <td>{{ $data->user->name }}</td>
                          @else
                            <td>Tidak diketahui</td>
                          @endif
                          <td>
                              <ul class="list-unstyled">
                              @foreach($data->mail_categori as $category)
                                <li>{{ $category->name }}</li>
                              @endforeach
                              </ul>
                            </td>

                            <td>
                              <form class="float-left" action="/Mails/{{$data->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm mr-2 my-1">Hapus</button>
                            </form>

                            <a href="Mails/{{ $data->id }}/edit" class="btn btn-primary btn-sm">Ubah</a>

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
