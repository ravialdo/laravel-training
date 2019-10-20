<?php $__env->startSection('content'); ?>

<div class="container">

  <a class="btn btn-primary my-3" href="<?php echo e(url('/Mails')); ?>"> Dashboard Mails</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Students</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success text-center animated bounceInRight slower" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- konten disini  -->


                    <a href="students/create" class="btn btn-success mb-3">Tambah Data Siswa</a>

                    <table class="table table-striped">	
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">NIS</th>
                          <th scope="col">NAMA</th>
				   	 
                          <th scope="col">AKSI</th>
					
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo e($data->nis); ?></td>
                          <td><?php echo e($data->nama); ?></td>
					 
                          <td>

                              <form class="float-left" action="/students/<?php echo e($data->id); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger btn-sm mr-2 my-1">Hapus</button>
                            </form>
						
                           		<a href="students/<?php echo e($data->id); ?>/edit" class="btn btn-primary btn-sm">Ubah</a>
						
                          </td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>

                    <!-- akhir konten -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/Download/laravel-training/resources/views/students.blade.php ENDPATH**/ ?>