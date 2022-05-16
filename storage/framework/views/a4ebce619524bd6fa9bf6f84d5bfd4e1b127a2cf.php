<div class="row form-search">
    <?php echo Form::open(['method' => 'GET', 'role' => 'form']); ?>

            <div class="col-md-10">
                <?php echo Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Rechercher un articles...']); ?>

            </div>
            <div class="col-md-2">
                <?php echo Form::submit('Rechercher', ['class' => 'btn btn-block btn-success']); ?>

            </div>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH C:\laragon\www\blog\resources\views/frontend/_search.blade.php ENDPATH**/ ?>