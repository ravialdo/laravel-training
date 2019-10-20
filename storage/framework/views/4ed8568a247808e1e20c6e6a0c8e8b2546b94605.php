<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Surat</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-<?php echo e(session('color')); ?> text-center" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(url('Mails')); ?>" enctype="multipart/form-data" method="POST" autocomplete="off">

                      <?php echo csrf_field(); ?>

                      <div class="form-group">
  					            <label>Incoming</label>
                        <input type="datetime-local" class="form-control col-7" name="incoming_at">
            						<?php if ($errors->has('incoming_at')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('incoming_at'); ?>
            							<div class="ml-1 text-danger text-xs">
            								<?php echo e($error); ?>

            							</div>
            						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    	</div>

                      <div class="form-group">
                         <label>Mail Date</label>
                         <input type="date" class="form-control col-7" name="mail_date">
                					<?php if ($errors->has('mail_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_date'); ?>
                							<div class="ml-1 text-danger text-xs">
                								<?php echo e($error); ?>

                							</div>
                						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                      </div>

				               <div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_code" placeholder="Mail Code" value="<?php echo e(old('mail_code')); ?>">
              						<?php if ($errors->has('mail_code')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_code'); ?>
              							<div class="ml-1 text-danger text-xs">
              								<?php echo e($error); ?>

              							</div>
              						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_from" placeholder="Mail From" value="<?php echo e(old('mail_from')); ?>">
              						<?php if ($errors->has('mail_from')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_from'); ?>
              							<div class="ml-1 text-danger text-xs">
              								<?php echo e($error); ?>

              							</div>
              						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    	</div>

                    	<div class="form-group">
                    	   <input type="text" class="form-control col-7" name="mail_to" placeholder="Mail To" value="<?php echo e(old('mail_to')); ?>">
              						<?php if ($errors->has('mail_to')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_to'); ?>
              							<div class="ml-1 text-danger text-xs">
              								<?php echo e($error); ?>

              							</div>
              						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    	</div>

                      <div class="form-group">
                    	   <input type="text" class="form-control" name="mail_subject" placeholder="Mail Subject" value="<?php echo e(old('mail_subject')); ?>"></input>
               						<?php if ($errors->has('mail_subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_subject'); ?>
              							<div class="ml-1 text-danger text-xs">
              								<?php echo e($error); ?>

              							</div>
              						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                   	</div>

                      <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description" rows="8"></textarea>
              					<?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
              							<div class="ml-1 text-danger text-xs">
              								<?php echo e($error); ?>

              							</div>
              						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                      </div>

                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" name="file_upload" class="custom-file-input">
                          <label class="custom-file-label">File Upload Mail</label>
                        </div>
                					<?php if ($errors->has('file_upload')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('file_upload'); ?>
                							<div class="ml-1 text-danger text-xs">
                								<?php echo e($error); ?>

                							</div>
                						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                     </div>

				             <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="form-group">
                        <div class="form-check">
              						<input class="form-check-input" type="radio" name="mail_type_id" value="<?php echo e($data->id); ?>">
              						<label class="form-check-label text-capitalize">
              							<?php echo e($data->type); ?>

              						</label>
              					</div>
                      </div>
				             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              				<?php if ($errors->has('mail_type_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_type_id'); ?>
              							<div class="ml-1 text-danger text-xs">
              								<?php echo e($error); ?>

              							</div>
              						<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

              				<input type="hidden" name="user_id" value="<?php echo e(Auth::User()->id); ?>">


                    	<button class="btn btn-success">Kirim</button>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/Download/laravel-training/resources/views/mails-create.blade.php ENDPATH**/ ?>