<?php $__env->startSection("style"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/attribution.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("adminBody"); ?>
    <div class="profil">
        <h3 style="font-size:12px ;"><i class="fa fa-cog"></i>&nbsp;
            <?php if(isset($key)): ?>
                <?php switch($key):
                    case ("filiere"): ?>
                        <?php echo e("Merci de choisir les les niveau d'etude pour cette filiere"); ?>

                        <?php break; ?>
                    <?php case ("niveau d'etude"): ?>
                        <?php echo e("Merci de choisir le(s) filiere(s) pour cette niveau d'etude"); ?>

                        <?php break; ?>
                    <?php case ("formateur"): ?>
                        <?php echo e("Merci de choisir les cours pour ce formateur"); ?>

                        <?php break; ?>
                    <?php case ("etudiant"): ?>
                        <?php echo e("Merci de choisir le(les) vague(s) pour cette etudiant"); ?>

                        <?php break; ?>
                    <?php case ("cours"): ?>
                        <?php echo e("Merci de choisir les vagues qui peut acceder à ce cours"); ?>

                        <?php break; ?>
                    <?php case ('vague'): ?>
                        <?php echo e("Merci de choisir les filière et niveau d'etude pour cette vague"); ?>

                        <?php break; ?>
                    <?php case ('users'): ?>
                        <?php echo e("Merci de choisir les groupe pour cette utilisateur"); ?>

                        <?php break; ?>
                    <?php default: ?>
                        <?php break; ?>
                <?php endswitch; ?>
            <?php endif; ?>
        </h3>
        <div class="card">
            <form action="<?php echo e(route('attribution.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="input">
                    <?php if($key == "vague"): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                            <input type="hidden" name="key" value="<?php echo e($key); ?>">
                            <input type="checkbox" class="custom-control-input" id="<?php echo e($data->id); ?>" <?php echo e(DB::table('vague_filiere_niveau_etudes')->where('filiere_niveau_etude_id',$data->id)->where('vague_id',$key2)->exists()? "name=check  checked readonly":"name=checkbox[] value=$data->id"); ?> >
                            <label class="custom-control-label" for="<?php echo e($data->id); ?>"><?php echo e($data->filiere->designation); ?>|<?php echo e($data->niveau_etude->designation); ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($key == "cours"): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                <input type="checkbox" class="custom-control-input" id="<?php echo e($value->id); ?>" <?php echo e(DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$value->id)->where('cour_id',$key2)->exists() ? "name=check checked readonly":"name=checkbox[] value=$value->id"); ?>>
                                <label class="custom-control-label" for="<?php echo e($value->id); ?>"><?php echo e($value->vague->designation); ?>|<?php echo e($value->filiere_niveau_etude->niveau_etude->designation); ?>|<?php echo e($value->filiere_niveau_etude->filiere->designation); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($key == 'formateur'): ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $data->cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cours): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                    <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo e($ids = DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id); ?>" <?php echo e(DB::table('cour_formateurs')->where('cvgnv_id',DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id)->where('formateur_id',$key2)->exists() ? "name=check checked readonly":"name=checkbox[] value= $ids"); ?>>
                                    <label class="custom-control-label" for="<?php echo e(DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id); ?>"><?php echo e($cours->designation); ?> | <?php echo e($data->vague->designation); ?> | <?php echo e($data->filiere_niveau_etude->filiere->designation); ?> | <?php echo e($data->filiere_niveau_etude->niveau_etude->designation); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($key == 'etudiant'): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $data->vagues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vague): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                            <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                            <input type="checkbox" class="custom-control-input" id="<?php echo e($ids = DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->where('filiere_niveau_etude_id',$data->id)->first()->id); ?>" <?php echo e(DB::table('etudiant_vagues')->where('vgflnv_id',DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->first()->id)->where('etudiant_id',$key2)->exists() ? "name=ckeck checked readonly":"name=checkbox[] value=$ids"); ?>>
                                            <label class="custom-control-label" for="<?php echo e($ids); ?>"><?php echo e($vague->designation); ?> | <?php echo e($data->filiere->designation); ?> | <?php echo e($data->niveau_etude->designation); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($key == 'filiere'): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                <input type="checkbox" class="custom-control-input" id="<?php echo e($data->id); ?>" <?php echo e(DB::table("filiere_niveau_etudes")->where('filiere_id',$key2)->where('niveau_etude_id',$data->id)->exists() ? "name=check checked readonly":"name=checkbox[] value=$data->id"); ?>>
                                <label class="custom-control-label" for="<?php echo e($data->id); ?>"><?php echo e($data->designation); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($key == "niveau d'etude"): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                <input type="checkbox" class="custom-control-input" id="<?php echo e($data->id); ?>" <?php echo e(DB::table("filiere_niveau_etudes")->where('filiere_id',$data->id)->where('niveau_etude_id',$key2)->exists() ? "name=check checked readonly":"name=checkbox[] value=$data->id"); ?>>
                                <label class="custom-control-label" for="<?php echo e($data->id); ?>"><?php echo e($data->designation); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($key == 'users'): ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="<?php echo e($key2); ?>">
                                <input type="hidden" name="key" value="<?php echo e($key); ?>">
                                <input type="checkbox" class="custom-control-input" id="<?php echo e($data->id); ?>" <?php echo e(DB::table("user__usergroup")->where('user_id',$key2)->where('usergroup_id',$data->id)->exists() ? "name=check checked readonly":"name=checkbox[] value=$data->id"); ?>>
                                <label class="custom-control-label" for="<?php echo e($data->id); ?>"><?php echo e($data->group_name); ?></label>
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

<?php echo $__env->make("layout.appAdmin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/Admin/attribution.blade.php ENDPATH**/ ?>