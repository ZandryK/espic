<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/cours.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminBody'); ?>
<div class="profil">
    <div class="contenu card">
            <div class="card-header d-flex flex-row justify-content-between align-items-center">
                <h5 class="text-capitalize"><i class="fa fa-user-cog"></i>&nbsp;Utilisateus</h5>
                <button class="btn btn-sm btn-primary" data-target="#myModal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Ajouter</button>
            </div>
            <div class="card-body table-responsive w-100 h-100">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">designation</th>
                            <th scope="col">durée</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e($index+1); ?></th>
                            <td><?php echo e($item->designation); ?></td>
                            <td><?php echo e($item->duree); ?></td>
                            <td>
                                <a href="<?php echo e(route('attribution',['key'=>'cours','key2'=>$item->id])); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit">&nbsp;Attribution</i></a>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;<span>supprimer</span></a>
                                <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i>&nbsp;<span>edit</span></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<?php echo $__env->make("modals.cours", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/cours.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/Admin/cours.blade.php ENDPATH**/ ?>