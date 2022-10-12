<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/formateur.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminBody'); ?>
<div class=" profil">
    <div class="contenu card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center">
            <h5 class="text-capitalize"><i class="fa fa-cogs"></i>&nbsp;</h5>
            <a href="<?php echo e(route('ajout.personnels', ['key'=>$key])); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Ajouter</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($item + 1); ?></th>
                        <td><?php echo e($value->matricule); ?></td>
                        <td><?php echo e($value->nom); ?></td>
                        <td><?php echo e($value->prenom); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->contact); ?></td>
                        <td>
                            <a href="<?php echo e(route('attribution', ['key'=>'formateur','key2'=>$value->id])); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                            <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/Admin/formateur.blade.php ENDPATH**/ ?>