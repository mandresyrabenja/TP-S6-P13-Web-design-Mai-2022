

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            <?php echo e($post->title); ?> <small>par <?php echo e($post->user->name); ?></small>

                            <a href="<?php echo e(url('admin/posts')); ?>" class="btn btn-default pull-right">Retour</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <p><?php echo e($post->body); ?></p>

                        <p><strong>Category: </strong><?php echo e($post->category->name); ?></p>
                        <p><strong>Tags: </strong><?php echo e($post->tags->implode('name', ', ')); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>