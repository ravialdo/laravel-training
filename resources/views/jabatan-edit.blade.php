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

                    <h1>Edit Jabatan</h1>

                    <form action="{{ url('jabatan/'. $jabatan->id_jabatan) }}" method="POST">
                      <div class="form-group">
                        <label>Nama Jabatan</label>
                        <input type="text" class="form-control" name="nama_jabatan" value="{{ $jabatan->nama }}">
                      </div>

                      @method('PUT')

                      @csrf

                      <select multiple class="form-control mb-4" name="users[]">

                        @foreach($users as $user)

                        @if(in_array($user->id, $selected))
                          <?php $select = 'selected' ?>
                        @else
                          <?php $select = '' ?>
                        @endif

                          <option value="{{ $user->id }}" {{ $select }}>
                            {{ $user->name }}
                          </option>
                        @endforeach

                      </select>

                      <button class="btn btn-primary">Ubah</button>
                    </form>

                    <!-- akhir konten -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
