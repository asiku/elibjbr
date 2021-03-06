<?php $__env->startSection('main'); ?>

<div class="card dlogin">
  <div class="card-header">
    Login E-Library Jambu Raya
  </div>
  <div class="card-body logcolor">

    <form action="<?php echo e(url('elogin')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
      <?php echo e(csrf_field()); ?>


      <div class="form-group">
      <label for="cabang" class="col-form-label">Cabang</label>
      <select class="custom-select" id="id_cabang" name="id_cabang" required>

        <?php if(!empty($cabang_list)): ?>
        <?php  foreach($cabang_list as $cabang): ?>
            <option value=<?php echo e($cabang->id_cabang); ?>><?php echo e($cabang->cabang); ?></option>
        <?php endforeach ?>

        <?php endif; ?>
      </select>
      <div class="invalid-feedback">Anda Belum memilih Cabang!</div>
    </div>


      <div class="form-group">
      <label for="user" class="col-form-label">Divisi</label>
      <select class="custom-select" id="usernm" name="usernm" required>

        <?php if(!empty($divisi_list)): ?>
        <?php  foreach($divisi_list as $divisi): ?>
            <option value=<?php echo e($divisi->divisi); ?>><?php echo e($divisi->divisi); ?></option>
        <?php endforeach ?>

        <?php endif; ?>
      </select>
      <div class="invalid-feedback">Anda Belum memilih Profesi!</div>
    </div>

      <div class="form-group">
        <label for="pwd" class="col-form-label">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd" required>
        <div class="invalid-feedback">
          Password Harus di Isi!
        </div>
      </div>
      <button class="btn btn-primary"  type="submit"> Login</button>
    </form>

  </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateelib', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>