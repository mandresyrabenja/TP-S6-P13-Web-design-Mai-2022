<div class="panel panel-default">
    <div class="panel-heading">Ecrivez votre commentaire</div>

    <div class="panel-body">
        <?php echo Form::open(['url' => "posts/{$post->id}/comment"]); ?>

            <div class="form-group">
                <?php echo Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3, 'required']); ?>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Répondre
                </button>
            </div>
        <?php echo Form::close(); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\blog\resources\views/frontend/_form.blade.php ENDPATH**/ ?>