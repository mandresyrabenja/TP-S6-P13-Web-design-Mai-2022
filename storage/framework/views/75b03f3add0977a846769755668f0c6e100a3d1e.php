

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>

                    <div class="panel-body">
                        <h1><?php echo e($posts); ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Commentaires</div>

                    <div class="panel-body">
                        <h1><?php echo e($comments); ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Mots-clés</div>

                    <div class="panel-body">
                        <h1><?php echo e($tags); ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Catégories</div>

                    <div class="panel-body">
                        <h1><?php echo e($categories); ?></h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/home.blade.php ENDPATH**/ ?>