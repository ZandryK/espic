<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content card">
            <!-- Modal Header -->
            <div class="entete card-header bg-primary d-flex flex-row align-content-center align-items-center">
                <h4 class="text-center d-flex justify-content-center my-auto" style="color:white; font-size:16px;">Nouveau cours</h4>
                <button type="button" class="close ml-auto" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="POST" action="<?php echo e(route('save.cours')); ?>">
                <div class="card-body">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="cours">Nom du cours:</label>
                            <input type="text" class="form-control validate" required id="cours" name="designation">
                        </div>
                        <div class="form-group">
                            <label for="duree">duree:</label>
                            <input type="text" class="form-control validate" required id="duree" name="duree">
                        </div>    
                </div>
                <div class="card-footer d-flex justify-content-end bg-white">
                    <button type="button" class="btn btn-outline-danger btn-sm " data-dismiss="modal"><i class=""></i>&nbsp;Annuler</button>
                    <button type="submit" class="btn btn-primary btn-sm ml-2"><i class="fa fa-database"></i>&nbsp;Valider</button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/modals/cours.blade.php ENDPATH**/ ?>