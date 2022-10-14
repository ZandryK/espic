<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/boxicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/admin.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>

    <title>ESC-ESPIC</title>
</head>
<body>
    <div class="wrapper">
    
    <section id="sidebar">
        <a href="" class="brand">
            <i class="fa fa-user-secret"></i>
            <span class="text logo">ESC-ESPIC</span>
        </a>
        <ul class="side-menu top">
            <li class="<?php echo e(request()->url() == route('Home') ? 'active':''); ?>">
                <a href=" <?php echo e(route('Home')); ?> ">
                    <i class="fa fa-dashboard"></i>
                    <span class="text">Menu</span>
                </a>
            </li>
            <li class="<?php echo e(request()->url() == route('user.profil') ? 'active':''); ?>">
                <a href="<?php echo e(route('user.profil')); ?>">
                    <i class="fa fa-user"></i>
                    <span class="text">Pofil</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-cog"></i>
                    <span class="text">Paramètre</span>
                </a>
            </li>
            <?php if(auth()->user()->usergroups->contains('group_name','formateur') || auth()->user()->usergroups->contains('group_name','Formateur') || auth()->user()->usergroups->contains('group_name','Formateurs')): ?>
            <li>
                <a href="<?php echo e(route('view.video')); ?>">
                    <i class="fa fa-video-camera"></i>
                    <span class="text">Envoyer Cours</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
        <ul class="side-menu bottom">
            <li>
                <a href="<?php echo e(route('logout')); ?>">
                    <i class="fa fa-sign-out"></i>
                    <span>Deconnexion</span>
                </a>
            </li>
        </ul>
    </section>


    

    
    <section id="content">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <button class="btn btn-outline-dark btn-toolbars"><i class="fa fa-bars"></i></button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-user-circle"></i>
                            <span class="text"><?php echo e(auth()->user()->name); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end-navbar -->
        <div class="container-fluid">
            <div class="content">
                <?php echo $__env->yieldContent('adminBody'); ?>
            </div>
    
    </div>
    <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/admin.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /home/zandry_kely/Documents/projet/resources/views/layout/appAdmin.blade.php ENDPATH**/ ?>