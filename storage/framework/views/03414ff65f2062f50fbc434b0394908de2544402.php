<ul class="nav navbar-nav">
    <li><a href="<?php echo e(url('admin/posts')); ?>">Articles</a></li>
    <li><a href="<?php echo e(url('admin/categories')); ?>">Catégories</a></li>
    <li><a href="<?php echo e(url('admin/comments')); ?>">Commentaires</a></li>
    <li><a href="<?php echo e(url('admin/tags')); ?>">Mots-clés</a></li>

    <?php if(Auth::user()->is_admin): ?>
        <li><a href="<?php echo e(url('admin/users')); ?>">Utilisateurs</a></li>
    <?php endif; ?>
</ul>
<?php /**PATH C:\laragon\www\blog\resources\views/layouts/_admin_menu.blade.php ENDPATH**/ ?>