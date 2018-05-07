
<form action="<?php echo e(url('uploadpdf')); ?>" method="post" role="form" enctype="multipart/form-data"
  class="needs-validation" data-toggle="validator" autocomplete="off"  novalidate>
  <?php echo e(csrf_field()); ?>


  <div class="form-group" >
    <input type="hidden" class="form-control" id="id_divisi" name="id_divisi" required>

  </div>

  <div class="form-group">


    <input type="text" class="form-control" id="id_divisi" name="id_divisi" value="<?php echo e(session('id_divisi')); ?>" required>

    <div class="invalid-feedback">
      id divisi Harus di Isi!
    </div>
  </div>

  <div class="form-group">
    <label for="id_perpus" class="col-form-label">Kategory:</label>
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

<div class="form-group" >
<input type="file" name="pth" id="pth">

</div>

  <button class="btn btn-primary"  type="submit"> Simpan </button>
</form>


<?php if(session('status_msg')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status_msg')); ?>

    </div>
<?php endif; ?>
