<form action="<?php echo e(url('counter')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
  <?php echo e(csrf_field()); ?>


  <div class="form-group">
    <label for="kategory" class="col-form-label">Kategory:</label>
    <input type="text" class="form-control" id="kategory" name="kategory" required>
    <div class="invalid-feedback">
      Kategory Harus di Isi!
    </div>
  </div>

  <button class="btn btn-primary"  type="submit"> Simpan </button>
</form>
