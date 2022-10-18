<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/datatables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/admin.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>

    <title>ESC-ESPIC</title>
</head>
<body>
    <div class="wrapper">
    
    <section id="sidebar">
        <a href="" class="brand pl-2">
            <span class="text logo"><img src="<?php echo e(asset('assets/images/logo/esc.png')); ?>" alt="" srcset="" style="width: 160px; height: 50px;"></span>
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
                    <span class="text">Thème</span>
                </a>
            </li>
            <?php if(isset(auth()->user()->usergroups)): ?>
                <?php if(auth()->user()->usergroups->count() >=2 ): ?>
                <li>
                    <a href="<?php echo e(route('change.compte', ['session'=>session()->get('usr_grp')])); ?>">
                        <i class="fa fa-user-plus"></i>
                        <span class="text">Changer de compte</span>
                    </a>
                </li>
                <?php endif; ?>
            <?php endif; ?>
            
            <?php if(session()->get('usr_grp') == "Formateurs"): ?>
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
            <div class="container-fluid">
                <button class="btn btn-outline-dark btn-toolbars"><i class="fa fa-bars"></i></button>
                <?php if(request()->url() != route('Home')): ?>
                    <div class="search">
                        <input type="text" name="" id="myInput" class="form-control" oninput="myFunction()">
                        <span class="bg-info">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                <?php endif; ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-user-circle"></i>
                            <?php if(isset(auth()->user()->name)): ?>
                                <span class="text"><?php echo e(auth()->user()->name); ?></span>
                            <?php endif; ?>
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
    <script src="<?php echo e(asset('assets/js/datatables.min.js')); ?>"></script>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/admin/search.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /home/zandry_kely/Documents/projet/resources/views/layout/appAdmin.blade.php ENDPATH**/ ?>