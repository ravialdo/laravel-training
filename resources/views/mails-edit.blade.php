@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Surat</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-{{ session('color') }} text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('Mails') }}" enctype="multipart/form-data" method="POST" autocomplete="off">

                      @csrf

                      <div class="form-group">
					   <label>Incoming</label>
                    	   <input type="datetime-local" class="form-control col-7" name="incoming_at" value="{{ $surat->incoming_at }}">
                    	</div>

                      <div class="form-group">
                         <label>Mail Date</label>
                         <input type="date" class="form-control col-7" name="mail_date" value="{{ $surat->mail_date }}">
                      </div>

				     <div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_code" placeholder="Mail Code" value="{{ $surat->mail_code }}">
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_from" placeholder="Mail From" value="{{ $surat->mail_from }}">
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_to" placeholder="Mail To" value="{{ $surat->mail_to }}">
                    	</div>

                      <div class="form-group">
                    	   <input type="text" class="form-control" name="mail_subject" placeholder="Mail Subject" value="{{ $surat->mail_subject }}"></input>
                   	</div>

                      <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description" rows="8" value="{{ $surat->description }}"></textarea>
                      </div>

                      <div class="form-group">
                        <div class="custom-file">
                        <input type="file" name="file_upload" class="custom-file-input" value="{{ $surat->file_upload }}">
                        <label class="custom-file-label">File Upload Mail Format .pdf .txt</label>
                      </div>
					@error('file_upload')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                     </div>

				   @foreach ($type as $data)
                      <div class="form-group">
                        <div class="form-check">
						<input class="form-check-input" type="radio" name="mail_type_id" value="{{ $data->id }}">
						<label class="form-check-label text-capitalize">
							{{ $data->type }}
						</label>
					</div>
                      </div>
				 @endforeach

				<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">


                    	<button class="btn btn-success">Kirim</button>
                    </form>

                     </div>
            </div>
        </div>
    </div>
</div>
@endsection
