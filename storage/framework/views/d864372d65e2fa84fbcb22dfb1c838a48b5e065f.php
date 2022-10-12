<?php $__env->startSection("style"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/attribution.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("adminBody"); ?>
    <div class="profil">
        <h3><i class="fa fa-cog"></i>&nbsp;Attribuer filiere avec les niveaux d' etude existants</h3>
        <div class="card">
            <form action="<?php echo e(route('attribution.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="input">
                    <?php if($key == "vague"): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                            <input type="hidden" name="key" value="<?php echo e($key); ?>">
                            <input type="checkbox" class="custom-control-input" id="<?php echo e($data->id); ?>" name="checkbox[]" value="<?php echo e($data->id); ?>">
                            <label class="custom-control-label" for="<?php echo e($data->id); ?>"><?php echo e($data->filiere_id); ?>|<?php echo e($data->filiere->designation); ?>|<?php echo e($data->niveau_etude->designation); ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                <input type="checkbox" class="custom-control-input" id="<?php echo e($data->id); ?>" name="checkbox[]" value="<?php echo e($data->id); ?>">
                                <label class="custom-control-label" for="<?php echo e($data->id); ?>"><?php echo e($data->designation); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                </div>
                <div class="button">
                    <button class="btn btn-sm btn-danger"><i class="fa fa-backward"></i>&nbsp;Annuler</button>
                    <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-database"></i>&nbsp;valider</button>

                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.appAdmin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/antonio/Documents/developpement_web/projet/resources/views/Admin/attribution.blade.php ENDPATH**/ ?>