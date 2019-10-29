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

                    <h1>Tambah Data Jabatan</h1>

                    <form action="{{ url('jabatan') }}" method="POST">
                      <div class="form-group">
                        <label>Nama Jabatan</label>
                      <input type="text" class="form-control" name="nama_jabatan">
                      </div>

                      @csrf

                      <button class="btn btn-success">Tambah</button>
                    </form>

                    <!-- akhir konten -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
