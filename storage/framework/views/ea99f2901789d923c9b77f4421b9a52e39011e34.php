<?php $__env->startSection('main'); ?>

<?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Page Content Holder -->
<div id="content">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <h2>Frequently Asked Questions</h2>

<p>Website Polling v1 beta Dibuat Untuk Keperluan Test saja.
  Mohon Maaf Masih banyak kekurangan didalamnya. Terima kasih.</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatedashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>