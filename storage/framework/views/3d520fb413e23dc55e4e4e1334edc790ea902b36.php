<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width,initial-scale=1">
    <title>Polling</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">


  </head>
  <body>
<div class="container">
  <?php echo $__env->yieldContent('main'); ?>
</div>


<script src="<?php echo e(asset('bootstrap/js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('bootstrap/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCRizwRaEHVp_4uN5AYtvWJ5NZrFgvql40"></script>
<?php echo $__env->yieldContent('footer'); ?>


  </body>
</html>
