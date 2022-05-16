<?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e($comment->user->name); ?> a dit ...

            <span class="pull-right"><?php echo e($comment->created_at->diffForHumans()); ?></span>
        </div>

        <div class="panel-body">
            <p><?php echo e($comment->body); ?></p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="panel panel-default">
        <div class="panel-heading">Aucun</div>

        <div class="panel-body">
            <p>Aucun commentaire pour cet article</p>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\blog\resources\views/frontend/_comments.blade.php ENDPATH**/ ?>