<?php $__env->startSection('main'); ?>

<div class="card dlogin">
  <div class="card-header">
    Login Dashboard
  </div>
  <div class="card-body logcolor">

    <form action="<?php echo e(url('clogin')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label for="user" class="col-form-label">User Name:</label>
        <input type="text" class="form-control" id="usernm" name="usernm" required>
        <div class="invalid-feedback">
          User Harus di Isi!
        </div>
      </div>

      <div class="form-group">
        <label for="pwd" class="col-form-label">Password:</label>
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

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>