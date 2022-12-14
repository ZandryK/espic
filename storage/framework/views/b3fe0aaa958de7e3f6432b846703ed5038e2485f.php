<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <title>ESC-ESPIC Login</title>
</head>
<body>
    <section id="LOGIN">
        <div class="img">
            <img src="<?php echo e(asset('assets/images/portfolio/banner2.jpg')); ?>" alt="img-fluid" class="img-fluid img-responsive">
        </div>
        <div class="blur">
            
        </div>

        <div class="login card">
            <figure>
                <span>
                    <i class="fa fa-user-circle"></i>
                </span>
                <figcaption>
                    <h2>SE CONNECTER</h2>
                </figcaption>
            </figure>
            <form action="<?php echo e(route('auth')); ?>" method="POST" id="LoginForm">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="matricule">Matricule</label>
                    <i class="fa fa-user icon-prefix"></i>
                    <input type="text" class="form-control" id="matricule" name="matricule">
                    <span class="invalid-feedback alert-matricule" id="mymatricule"></span>
                </div>
                <div class="form-group">
                    <label for="password">Mots de passe</label>
                    <i class="fa fa-lock icon-prefix"></i>
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="invalid-feedback alert-password" id="mypassword"></span>
                </div>
                <button type="submit" class="button-submit">Connexion</button>
            </form>
        </div>
    </section>
    <script src="<?php echo e(asset('assets/js/login.js')); ?>"></script>
</body>
</html><?php /**PATH /home/zandry_kely/Documents/Dev/laravel/projet/resources/views/Auth/login.blade.php ENDPATH**/ ?>