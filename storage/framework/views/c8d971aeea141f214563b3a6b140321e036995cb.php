

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Catégories

                            <a href="<?php echo e(url('admin/categories/create')); ?>" class="btn btn-default pull-right">Créer</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Nombre des articles</th>
                                    <th>Opération</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->posts_count); ?></td>
                                        <td>
                                            <a href="<?php echo e(url("/admin/categories/{$category->id}/edit")); ?>" class="btn btn-xs btn-info">Modifier</a>
                                            <a href="<?php echo e(url("/admin/categories/{$category->id}")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Etes vous sûr?" class="btn btn-xs btn-danger">Effacer</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="2">Aucune catégorie disponible</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php echo $categories->links(); ?>


                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>