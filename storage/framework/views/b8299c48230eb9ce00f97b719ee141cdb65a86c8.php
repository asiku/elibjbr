<?php $__env->startSection('main'); ?>

<?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Page Content Holder -->
<div id="content">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <h2>Data Pemilih pilkada</h2>
    <?php if(!empty($pemilih_list)): ?>

    <div class="row">
      <div class="col-sm-12">

    <div class="panel panel-default" style="width:1000px">
      <!-- Default panel contents -->
      <div class="panel-heading">Data Pemilih</div>
      <div class="panel-body">
        <div class="input-group">
     <input type="text" id="txtcari" class="form-control" placeholder="Cari...">
     <span class="input-group-btn">
       <button id="btcari" class="btn btn-default" type="button">Cari</button>
     </span>
   </div><!-- /input-group -->


      </div>

      <!-- Table -->
      <table id="tbpemilih" class="table">
        <thead>
          <tr>
            <!-- <th>No.</th> -->
            <th>Nama</th>
            <th>No. KTP</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Profesi</th>
            <th>Umur</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach($pemilih_list as $pm): ?>
          <tr>
            <!-- <td><?php echo e($jmlb+=1); ?></td> -->
          <td><?php echo e($pm->nama); ?></td>
            <td><?php echo e($pm->no_ktp); ?></td>
            <td><?php echo e($pm->tgl_lahir); ?></td>
            <td><?php echo e($pm->jk); ?></td>
            <td><?php echo e($pm->profesi); ?></td>
            <td><?php echo e($pm->umur); ?></td>
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



  <!-- <div class="line"></div> -->
<div class="panel panel-default">
<div class="panel-body"><h3>Jumlah Keseluruhan Pemilih <span id="totall"> </span> </h3></div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatedashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>