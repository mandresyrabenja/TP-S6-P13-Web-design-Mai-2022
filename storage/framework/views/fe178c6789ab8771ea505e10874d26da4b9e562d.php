

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href="<?php echo e(url('admin/posts/create')); ?>" class="btn btn-default pull-right">Créer un article</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Contenu</th>
                                    <th>Auteur</th>
                                    <th>Catégorie</th>
                                    <th>Mots-clé</th>
                                    <th>Publié</th>
                                    <th>Opération</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e(str_limit($post->body, 60)); ?></td>
                                        <td><?php echo e($post->user->name); ?></td>
                                        <td><?php echo e($post->category->name); ?></td>
                                        <td><?php echo e($post->tags->implode('name', ', ')); ?></td>
                                        <td><?php echo e($post->published); ?></td>
                                        <td>
                                            <?php if(Auth::user()->is_admin): ?>
                                                <?php
                                                    if($post->published == 'Oui') {
                                                        $label = 'Archiver';
                                                    } else {
                                                        $label = 'Publier';
                                                    }
                                                ?>
                                                <a href="<?php echo e(url("/admin/posts/{$post->id}/publish")); ?>" data-method="PUT" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Etes vous sûr?" class="btn btn-xs btn-warning"><?php echo e($label); ?></a>
                                            <?php endif; ?>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}")); ?>" class="btn btn-xs btn-success">Afficher</a>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}/edit")); ?>" class="btn btn-xs btn-info">Modifier</a>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Etes vous sûr?" class="btn btn-xs btn-danger">Effacer</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">Aucun article disponible.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php echo $posts->links(); ?>


                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>