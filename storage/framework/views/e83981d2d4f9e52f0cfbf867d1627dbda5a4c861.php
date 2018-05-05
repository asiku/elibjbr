
<form action="<?php echo e(url('counter')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
  <?php echo e(csrf_field()); ?>


  <div class="form-group" >
    <input type="hidden" class="form-control" id="id_divisi" name="id_divisi" required>

  </div>

  <div class="form-group">
  <select class="custom-select" name="id_perpus" required>
    <option value="">Pilih Salah Satu kategory</option>

  <?php if(!empty($kategory_list)): ?>
  <?php  foreach($kategory_list as $kategory): ?>
    <option value=<?php echo e($kategory->id_perpus); ?>><?php echo e($kategory->kategory); ?></option>

  <?php endforeach ?>
  <?php endif; ?>

  </select>
  <div class="invalid-feedback">Anda Belum memilih kategory!</div>
</div>

  <button class="btn btn-primary"  type="submit"> Simpan </button>
</form>
