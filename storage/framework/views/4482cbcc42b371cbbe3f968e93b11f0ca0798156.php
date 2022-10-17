<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/etudiants.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminBody'); ?>
<h1>
    <?php if(session()->get('usr_grp') == "Formateurs"): ?>
        <?php echo e(" Mes vagues"); ?>

    <?php elseif(session()->get('usr_grp') == "Etudiants"): ?>
        <?php echo e("Mes cours"); ?>

    <?php endif; ?>
</h1>
<div class="content-center">
    <div class="etudiant-content">
        <?php if(session()->get('usr_grp') == "Formateurs"): ?>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card">
                    <figure>
                        <span class="icone"><i class="fa fa-book"></i></span>
                        <figcaption>
                            <h3><?php echo e($data->vague_filiere_niveau_etude->filiere_niveau_etude->filiere->designation); ?>&nbsp;|
                                &nbsp;<?php echo e($data->vague_filiere_niveau_etude->filiere_niveau_etude->niveau_etude->designation); ?>

                            </h3>
                            <p><span><i class="fa fa-clock-o"></i></span>&nbsp;<?php echo e($data->vague_filiere_niveau_etude->vague->designation); ?></p>
                            <a href="<?php echo e(route('formateur.cours', ['id'=>$data->vague_filiere_niveau_etude->id])); ?>" class="btn btn-info btn-sm">Go</a>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h1 class="text-center">Aucun vague</h1>
            <?php endif; ?>
        <?php elseif(session()->get('usr_grp') == "Etudiants"): ?>
        
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php $__currentLoopData = $data->vague_filiere_niveau_etude->cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <figure>
                            <span class="icone"><i class="fa fa-book"></i></span>
                            <figcaption>
                                <h3>
                                
                                    <?php echo e($cour->designation); ?>

                                </h3>
                                <p><span><i class="fa fa-clock-o"></i></span>&nbsp;<?php echo e($cour->duree); ?></p>
                                <a href="<?php echo e(route('playlist', ['cour_id'=>$cour->id,'vague_id'=>$data->vague_filiere_niveau_etude->id])); ?>" class="btn btn-info btn-sm">Voir plus</a>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h1 class="text-center">Aucun cours</h1>
            <?php endif; ?>
        
        <?php endif; ?>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/home/menu.blade.php ENDPATH**/ ?>