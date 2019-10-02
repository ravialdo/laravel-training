@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('students/'. $siswa->id) }}" method="POST">
                        
                        @method('PUT')
                        @csrf

                    	<div class="form-group">
                    		<label>NIS</label>
                    	<input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}">
                    	</div>
                    	<div class="form-group">
                    		<label>Nama</label>
                    	<input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
                    	</div>
                    	 @csrf
                       
                    	
                    	<button class="btn btn-success">Edit</button>
                    </form>

                     </div>
            </div>
        </div>
    </div>
</div>
@endsection