@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Surat</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('Mails') }}" method="POST">

                      @csrf

                      <div class="form-group">
                    	   <input type="date" class="form-control col-5" name="incoming_at" placeholder="Incoming">
                    	</div>
                      <div class="form-group">
                    	   <input type="text" class="form-control col-5" name="mail_code" placeholder="Mail Code">
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-5" name="mail_from" placeholder="Mail From">
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-5" name="mail_to" placeholder="Mail To">
                    	</div>

                      <div class="form-group">
                    	   <input type="text" class="form-control" name="mail_subject" placeholder="Mail Subject">
                    	</div>

                      <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description" rows="8"></textarea>
                      </div>

                      <div class="form-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">File Surat</label>
                      </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <label class="form-check-label">
                            Default checkbox
                          </label>
                        </div>
                      </div>


                    	<button class="btn btn-success">Tambah</button>
                    </form>

                     </div>
            </div>
        </div>
    </div>
</div>
@endsection
