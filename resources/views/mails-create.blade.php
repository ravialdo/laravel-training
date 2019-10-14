@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Surat</div>

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
                    	   <input type="datetime-local" class="form-control col-7" name="incoming_at">
						@error('incoming_at')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                    	</div>

                      <div class="form-group">
                         <label>Mail Date</label>
                         <input type="date" class="form-control col-7" name="mail_date">
					@error('mail_date')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                      </div>

				     <div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_code" placeholder="Mail Code" value="{{ old('mail_code') }}">
						@error('mail_code')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_from" placeholder="Mail From" value="{{ old('mail_from') }}">
						@error('mail_from')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_to" placeholder="Mail To" value="{{ old('mail_to') }}">
						@error('mail_to')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                    	</div>

                      <div class="form-group">
                    	   <input type="text" class="form-control" name="mail_subject" placeholder="Mail Subject" value="{{ old('mail_subject') }}"></input>
 						@error('mail_subject')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                   	</div>

                      <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description" rows="8"></textarea>
					@error('description')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror
                      </div>

                      <div class="form-group">
                        <div class="custom-file">
                        <input type="file" name="file_upload" class="custom-file-input">
                        <label class="custom-file-label">File Upload Mail</label>
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
				@error('mail_type_id')
							<div class="ml-1 text-danger text-xs">
								{{ $error }}
							</div>
						@enderror

				<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">


                    	<button class="btn btn-success">Kirim</button>
                    </form>

                     </div>
            </div>
        </div>
    </div>
</div>
@endsection
