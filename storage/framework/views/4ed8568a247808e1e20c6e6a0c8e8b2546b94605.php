<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Surat</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(url('Mails')); ?>" method="POST">

                      <?php echo csrf_field(); ?>

                      <div class="form-group">
					<label>Incoming</label>
                    	   <input type="date" class="form-control col-5" name="incoming_at">
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
                        <input type="file" class="custom-file-input">
                        <label class="custom-file-label">File Surat</label>
                      </div>
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
				
				<input type="hidden" name="user_id" value="<?php echo e(Auth::User()->id); ?>">

	
                    	<button class="btn btn-success">Tambah</button>
                    </form>

                     </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/Download/laravel-training/resources/views/mails-create.blade.php ENDPATH**/ ?>