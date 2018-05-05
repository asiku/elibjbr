
<form action="<?php echo e(url('uploadpdf')); ?>" method="post" role="form" enctype="multipart/form-data"
  class="needs-validation" data-toggle="validator" autocomplete="off"  novalidate>
  <?php echo e(csrf_field()); ?>


  <!-- <div class="form-group" >
    <input type="hidden" class="form-control" id="id_divisi" name="id_divisi" required>

  </div>

  <div class="form-group">
  <select class="custom-select" name="id_perpus" required>
    <option value="">Pilih Salah Satu kategory</option>


  </select>
  <div class="invalid-feedback">Anda Belum memilih kategory!</div>
</div> -->

<div class="form-group" >
<input type="file" name="pth" id="pth">

</div>

  <button class="btn btn-primary"  type="submit"> Simpan </button>
</form>
