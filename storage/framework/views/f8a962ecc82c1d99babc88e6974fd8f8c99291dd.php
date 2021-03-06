<?php $__env->startSection('main'); ?>

<div class="card dlogin">
  <div class="card-header">
    Login E-Library Jambu Raya
  </div>
  <div class="card-body logcolor">

    <form action="<?php echo e(url('eloginRPA')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
      <?php echo e(csrf_field()); ?>


      <div class="form-group" >
        <?php  foreach($divisi_list as $divisi): ?>
              <input type="hidden" class="form-control" id="id_divisi" name="id_divisi" value="<?php echo e($divisi->id_divisi); ?>" required>
        <?php endforeach ?>


      </div>

      <div class="form-group">
      <label for="user" class="col-form-label">Divisi</label>
      <select class="custom-select" id="usernm" name="usernm" required>
          <option value="">Pilih Salah Satu Divisi</option>
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

<?php echo $__env->make('templateelibdashRPA', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>