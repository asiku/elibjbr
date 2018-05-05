<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width,initial-scale=1">
    <title>E-library Jambu Raya</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleelib.css')); ?>">


  </head>
  <body>
<div class="container">
  <?php echo $__env->yieldContent('main'); ?>
</div>

<?php echo $__env->yieldContent('footer'); ?>
<script src="<?php echo e(asset('bootstrap/js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('bootstrap/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>


<script>

$(document).ready(function() {




});

</script>

  </body>
</html>
