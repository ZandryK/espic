<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/menu.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminBody'); ?>
<div class="content-menu">
    <div class="center">
        <div class="card">
            <a href="<?php echo e(route('configuration',['key'=>'filiere'])); ?>">
                <figure>
                    <span><i class="fa fa-bookmark"></i></span>
                    <figcaption>
                        <h3>Filières</h3>
                        <p>Gerer vos filière, ajouter, supprimer, modifier</p>
                        <a href="<?php echo e(route('configuration',['key'=>'filiere'])); ?>">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="<?php echo e(route('configuration',['key'=>'niveau d\'etude'])); ?>">
                <figure>
                    <span><i class="fa fa-graduation-cap"></i></span>
                    <figcaption>
                        <h3>Niveau d'etude</h3>
                        <p>Gerer vos niveaux d'etudes, ajouter, supprimer, modifier</p>
                        <a href="<?php echo e(route('configuration',['key'=>'niveau d\'etude'])); ?>">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="<?php echo e(route('configuration',['key'=>'vague'])); ?>">
             <figure>
                 <span><i class="fa fa-user-plus"></i></span>
                 <figcaption>
                     <h3>Vagues</h3>
                     <p>Gerer vos vagues, ajouter, supprimer, modifier</p>
                     <a href="<?php echo e(route('configuration',['key'=>'vague'])); ?>">voir plus</a>
                 </figcaption>
             </figure>
            </a>
         </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-book"></i></span>
                    <figcaption>
                        <h3>Cours</h3>
                        <p>Gerer vos cours, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div href="" class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-users"></i></span>
                    <figcaption>
                        <h3>Formateurs</h3>
                        <p>Gerer vos formateurs, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-user"></i></span>
                    <figcaption>
                        <h3>Etudiants</h3>
                        <p>Gerer vos etudiants, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-video-camera"></i></span>
                    <figcaption>
                        <h3>Videos</h3>
                        <p>Gerer vos videos, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="<?php echo e(route('users')); ?>">
                <figure>
                    <span><i class="fa fa-users"></i></span>
                    <figcaption>
                        <h3>Utilisateurs</h3>
                        <p>Gerer vos utilisateurs, ajouter, supprimer, modifier</p>
                        <a href="<?php echo e(route('users')); ?>">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-users"></i></span>
                    <figcaption>
                        <h3>Groupes d'utilisateurs</h3>
                        <p>Gerer vos groupes d'utilisateurs</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>
    <script src="<?php echo e(asset('assets/js/admin/redirection.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/antonio/Documents/developpement_web/projet/resources/views/Admin/menu.blade.php ENDPATH**/ ?>