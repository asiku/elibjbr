<?php $__env->startSection('main'); ?>

<?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Page Content Holder -->
<div id="content">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <h2>Data Kandidat pilkada</h2>
    <?php if(!empty($kandidat_list)): ?>

    <div class="row">
      <div class="col-sm-12">

    <div class="panel panel-default" style="width:1000px">
      <!-- Default panel contents -->
      <div class="panel-heading">Data Kandidat</div>
      <div class="panel-body">
        <div class="input-group">
     <input type="text" id="txtcari" class="form-control" placeholder="Cari...">
     <span class="input-group-btn">
       <button id="btcari" class="btn btn-default" type="button">Cari</button>
     </span>
   </div><!-- /input-group -->

      </div>

      <!-- Table -->
      <table id="tbkandidat" class="table">
        <thead>
          <tr>
            <!-- <th>No.</th> -->
            <th>Nama</th>
            <th>Foto</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Telp.</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach($kandidat_list as $pm): ?>
          <tr>

          <td><?php echo e($pm->nama); ?></td>
            <td><?php echo e($pm->foto); ?></td>
            <td><?php echo e($pm->visi); ?></td>
            <td><?php echo e($pm->misi); ?></td>
            <td><?php echo e($pm->tlp); ?></td>
            <td><button id="btedit" class="btn btn-primary"  type="submit"> Edit</button></td>
            <td><button id="btdelete" class="btn btn-primary"  type="submit"> Delete</button></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>
    <?php else: ?>
    <div class="alert alert-danger" role="alert">
      <p>Tidak Ada Data !</p>
    </div>
    <?php endif; ?>

</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <!-- <h5 class="modal-nama" id="exampleModalLabelnama">New message</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="alertktp" class="alert alert-warning alert-dismissible fade show" role="alert">
          No. Ktp Sudah Pernah Di Input!

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>

        <form action="<?php echo e(url('counter')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
          <?php echo e(csrf_field()); ?>

          <!-- <input type="hidden" name="_token" > -->
<!-- style="visibility: hidden;" -->
          <div class="form-group" >
            <input type="hidden" class="form-control" id="id_kandidat" name="id_kandidat" required>
            <!-- <label for="id_kandidat" class="col-form-label">Id Kandidat</label>
            <input type="text" class="form-control" id="id_kandidat" required> -->
            <!-- <div class="invalid-feedback">
              No. Ktp Harus di Isi!
            </div> -->
          </div>
          <div class="form-group">
            <label for="no_ktp" id="lblnoktp" class="col-form-label">No. KTP:</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
            <div class="invalid-feedback">
              No. Ktp Harus di Isi!
            </div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div class="invalid-feedback">
              Nama Harus di Isi!
            </div>
          </div>
          <div class="form-group">
            <label for="tgl_lahir" class="col-form-label">Tgl Lahir:</label>
            <input name="tgl_lahir" class="form-control" id="tgl_lahir" type="date" required>
            <div class="invalid-feedback">
              Tgl Harus diisi
            </div>
          </div>
          <div class="form-group">
          <select class="custom-select" name="profesi" required>
            <option value="">Pilih Salah Satu Profesi</option>
            <option value="Pegawai Swasta">Pegawai Swasta</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Pengajar">Pengajar</option>
            <option value="Dokter">Dokter</option>
            <option value="Pelayan Medis">Pelayan Medis</option>
            <option value="Buruh">Buruh</option>
            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Pelajar">Pelajar</option>
            <option value="PNS">PNS</option>
            <option value="Non Formal">Non Formal</option>
            <option value="Tidak Punya Pekerjaan">Tidak Punya Pekerjaan</option>
            <option value="Lainnya">Lainnya</option>

          </select>
          <div class="invalid-feedback">Anda Belum memilih Profesi!</div>
        </div>
          <div class="form-group">
            <label for="jk" class="col-form-label">Jenis Kelamin:</label>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="customControlValidation2" name="jk" value='l' required>
                <label class="custom-control-label" for="customControlValidation2"> Laki-laki</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="customControlValidation3" name="jk" value='p' required>
                <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
                <div class="invalid-feedback"> Anda Belum Memilih Jenis Kelamin!</div>
              </div>
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="latitude" name="latitude">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="longitude" name="longitude">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="kel_desa" name="kel_desa">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="kecamatan" name="kecamatan">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button class="btn btn-primary"  type="submit"> Proses Vote</button>
        </form>




      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary"> Proses Vote</button>
      </div> -->
    </div>
  </div>
</div>

  <!-- <div class="line"></div> -->
<div class="panel panel-default">
<!-- <div class="panel-body"><button type="button" class="btn btn-success">Tambah Data</button></div> -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatedashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>