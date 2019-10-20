<?php $__env->startSection('content'); ?>
<div class="container">

  <a class="btn btn-primary my-3" href="<?php echo e(url('/students')); ?>"> Dashboard Students</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Mails</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success text-center animated bounceInRight slower" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- konten disini  -->

                    <a href="Mails/create" class="btn btn-success mb-3">Tambah Data Surat</a>

                    <table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Kode</th>
                          <th scope="col">Tipe Surat</th>
                          <th scope="col">Pembuat</th>
                          <th scope=col">Kategori</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php $__currentLoopData = $surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo e($data->mail_code); ?></td>
                          <td><?php echo e($data->mailType->type); ?></td>

                          <?php if( $data->user->name): ?>
                            <td><?php echo e($data->user->name); ?></td>
                          <?php else: ?>
                            <td>Tidak diketahui</td>
                          <?php endif; ?>
                          <td>
                              <ul class="list-unstyled">
                              <?php $__currentLoopData = $data->mail_categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($category->name); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                            </td>

                            <td>
                              <form class="float-left" action="/Mails/<?php echo e($data->id); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger btn-sm mr-2 my-1">Hapus</button>
                            </form>

                            <a href="Mails/<?php echo e($data->id); ?>/edit" class="btn btn-primary btn-sm">Ubah</a>

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