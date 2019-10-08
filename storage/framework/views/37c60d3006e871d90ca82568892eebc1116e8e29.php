<?php $__env->startSection('content'); ?>
<div class="container">

  <a class="btn btn-primary" href="<?php echo e(url('/students')); ?>"> Dashboard Students</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Mails</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success text-center" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- konten disini  -->

                    <a href="Mails/create" class="btn btn-success mb-3">Tambah Data Surat</a>

                    <table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Mail From</th>
                          <th scope="col">Mail To</th>
                          <th scope="col">Subject</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php $__currentLoopData = $surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo e($data->mail_from); ?></td>
                          <td><?php echo e($data->mail_to); ?></td>
                          <td><?php echo e($data->mail_subject); ?></td>

                          <td>
                              <form class="float-left" action="/Mails/<?php echo e($data->id); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger">Hapus</button>
                            </form>

                            <a href="students/<?php echo e($data->id); ?>/edit" class="btn btn-primary ml-2">Ubah</a>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/Download/laravel-training/resources/views/mails.blade.php ENDPATH**/ ?>