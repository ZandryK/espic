<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/home.css')); ?>">

    <!-- TITLE -->
    <title>Espic</title>
</head>
<body>
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>
    
    <?php echo $__env->yieldContent('body'); ?>
    
<!-- SCRIPT -->
    <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>
</html>    <?php /**PATH /home/zandry_kely/Documents/Dev/laravel/projet/resources/views/layout/appHome.blade.php ENDPATH**/ ?>