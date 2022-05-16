

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Commentaire

                            <a href="<?php echo e(url('admin/comments/create')); ?>" class="btn btn-default pull-right">Créer</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Article</th>
                                    <th>Commentaire</th>
                                    <th>Opération</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($comment->post->title); ?></td>
                                        <td><?php echo e($comment->body); ?></td>
                                        <td>
                                            <a href="<?php echo e(url("/admin/comments/{$comment->id}")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Etes-vous sûr?" class="btn btn-xs btn-danger">Effacer</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="2">Aucun commentaire</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php echo $comments->links(); ?>


                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/admin/comments/index.blade.php ENDPATH**/ ?>