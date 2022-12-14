<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/formateur.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminBody'); ?>
<div class=" profil">
    <div class="contenu card">
        <div class="card-header bg-white d-flex flex-row justify-content-between align-items-center">
            <h5 class="text-capitalize"><i class="fa fa-cogs"></i>&nbsp;<?php echo e($key); ?></h5>
            <a href="<?php echo e(route('ajout.personnels', ['key'=>$key])); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Ajouter</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table" id="myTable">
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
                            <a href="<?php echo e(route('attribution', ['key'=>$key,'key2'=>$value->id])); ?>" class="btn btn-info btn-sm" title="vagues"><i class="fa fa-edit"></i></a>
                            <?php if($key == 'formateur'): ?>
                            <a href="<?php echo e(route('edit.formateur', ['id'=>$value->id])); ?>" class="btn btn-outline-success btn-sm" title="Voir" ><i class="fa fa-pencil"></i></a>
                            <?php elseif($key == "etudiant"): ?>
                            <a href="<?php echo e(route('edit.etudiants', ['id'=>$value->id])); ?>" class="btn btn-outline-success btn-sm" title="Voir" ><i class="fa fa-pencil"></i></a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('add.pers.user', ['key'=>$key,'id'=>$value->id])); ?>" class="btn btn-outline-primary btn-sm" title="Ajouter comme utilisateur"><i class="fa fa-user-plus"></i></a>
                            <a href="<?php echo e(route('delete.personnel', ['key'=>$key,'id'=>$value->id])); ?>" class="btn btn-outline-danger btn-sm" title="supprimer"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php echo $__env->make("modals.users", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/Admin/formateur.blade.php ENDPATH**/ ?>