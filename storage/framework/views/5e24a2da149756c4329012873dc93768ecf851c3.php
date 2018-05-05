<?php $__env->startSection('main'); ?>

<?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Page Content Holder -->
<div id="content">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <h2>Polling Kelompok Umur</h2>
    <?php if(!empty($kandidat_list)): ?>
    <div class="row">
    <?php  foreach($kandidat_list as $kandidat): ?>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo e($kandidat->nama); ?></h3>
            </div>
            <div class="panel-body">

              <img class="img-responsive" src="<?php echo e(asset('gbr/'.$kandidat->foto)); ?>" alt="Card image cap">
              <img  class="imgload" src="<?php echo e(asset('gbr/loading.gif')); ?>" alt="Card image cap" >
              <!-- buat 17 -->
              <!-- <p> <strong>Total Vote Pemilih Pemula 17 - 20 :</strong> <span class="titleprogresstot17" id=<?php echo e('tot17'.$kandidat->id_kandidat); ?>></span> </p>
              <div class="progress" >
               <div id=<?php echo e('pr17'.$kandidat->id_kandidat); ?> class="progress-bar progress-bar-striped active" role="progressbar"
                  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                 <span class="titleprogress17" id=<?php echo e($kandidat->id_kandidat); ?>></span>
               </div>
              </div> -->

              <!-- buat 20 -->
              <!-- <p> <strong>Total Vote Pemilih Pemula 20 - 40 :</strong> <span class="titleprogresstot20" id=<?php echo e('tot20'.$kandidat->id_kandidat); ?>></span> </p>
              <div class="progress" >
               <div id=<?php echo e('pr20'.$kandidat->id_kandidat); ?> class="progress-bar progress-bar-striped active" role="progressbar"
                  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                 <span class="titleprogress20" id=<?php echo e($kandidat->id_kandidat); ?>></span>
               </div>
              </div> -->
 <span class="titleprogress17" id=<?php echo e($kandidat->id_kandidat); ?>></span>
              <canvas id=<?php echo e('chart'.$kandidat->id_kandidat); ?> width="200" height="200"></canvas>



            </div>
          </div>
  </div>
    <?php endforeach ?>

    <?php else: ?>
    <div class="alert alert-danger" role="alert">
      <p>Tidak Ada Data !</p>
    </div>
    <?php endif; ?>
    </div>

  <!-- <div class="line"></div> -->
    <div class="panel panel-default">
      <div class="panel-body"><h3>Jumlah Keseluruhan <span id="totall"> </span> Vote</h3></div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatedashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>