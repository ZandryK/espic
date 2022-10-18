<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/commun.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminBody'); ?>
<div class="profil">
    <nav class="navbar navbar-expand-sm navbar-light d-flex flex-row">
        <a href="" class="navbar-brand text-capitalize"><i class="fa fa-cogs"></i>&nbsp;<?php echo e($key); ?></a>
        <form class="form-inline ml-auto " method="POST" action="<?php echo e(route('save.configuration')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="key" value="<?php echo e($key); ?>">
          <input type="text" placeholder="entrer nouveau <?php echo e($key); ?>" name="designation">
          <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
        </form>
      </nav> 
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr class="justify-content-center">
                    <th scope="col" class="text-start " style="width: 30%;">#</th>
                    <th scope="col" class="text-start " style="width: 30%;">Designation</th>
                    <th scope="col" class="text-start " style="width: 40%;">Action</th>
                </tr>
            </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="justify-content-center">
                    <th scope="row" class=""><?php echo e($index + 1); ?></th>
                    <td>
                        <?php if($key != "vagues"): ?>
                        <?php echo e($data->designation); ?>

                        <?php else: ?>
                        <?php echo e($data->designation_vague); ?>

                        <?php endif; ?>
                    </td>
                    <td class="">
                        
                        <?php if($key != "vagues"): ?>
                        <a href="<?php echo e(route('attribution', ['key'=>$key,"key2"=>$data->id])); ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i><span>&nbsp;Attribution</span></a>
                        <?php else: ?>
                        <a href="<?php echo e(route('attribution', ['key'=>$key,"key2"=>$data->designation_vague])); ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i><span>&nbsp;Attribution</span></a>
                        <?php endif; ?>
                        <a href="<?php echo e(route('delete.configuration', ['key'=>$key,'id'=>$data->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i><span>&nbsp;Supprimer</span></a>
                        <a href="<?php echo e(route('edit.configuration', ['key'=>$key,'id'=>$data->id])); ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i><span>&nbsp;Edit</span></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/Admin/filiere.blade.php ENDPATH**/ ?>