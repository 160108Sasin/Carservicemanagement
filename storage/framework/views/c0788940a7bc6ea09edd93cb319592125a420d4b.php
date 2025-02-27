<?php $__env->startSection('content'); ?>
    
    <div class="d-flex justify-content-end mb-2">

    <a href="<?php echo e(route('mechanics.create')); ?>" class="btn btn-success">Add Mechanic</a>

    </div>

    <div class="card card-default">
        <div class="card-header">
            Mechanics
        </div>

        <div class="card-body">

            <?php if($mechanic->count() > 0): ?>

                <table class="table">

                    <thead>

                        <th>Name</th>
                        <th></th>
                    </thead>

                    <tbody> 

                        <?php $__currentLoopData = $mechanic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($mechanics->name); ?>

                                </td>

                                <td>
                                    <a href="<?php echo e(route('mechanics.edit', $mechanics->id)); ?>" class="btn btn-info btn-sm">
                                        Edit
                                    </a>

                                    <button class="btn btn-danger btn-sm" onclick="handleDelete(<?php echo e($mechanics->id); ?>)">

                                        Delete

                                    </button>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

            <?php else: ?>

                <h3 class="text-center">No mechanics yet</h3>

            <?php endif; ?>
            

            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form action="" method="POST" id="deleteMechanicForm">

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>

                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DeleteModalLabel">Delete Mechanic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-denter text-bold">
                            Are you sure you want to delete this Mechanic?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                    </div>

                </form>
            </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
    
        function handleDelete(id)
        {

            var form = document.getElementById('deleteMechanicForm')
            form.action = '/mechanics/' + id
            $('#DeleteModal').modal('show')
        }
    
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/mechanic/index.blade.php ENDPATH**/ ?>