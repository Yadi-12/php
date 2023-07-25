<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Vista creada en blade y llaman</h1>
    <p><a href="<?php echo e(route('gamesCreate')); ?>">Nuevo videojuego</a></p>
    <h2>Listado de juegos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th><?php echo e($game->id); ?></th>
                <th><a href="<?php echo e(route('viewGame', $game->id)); ?>"><?php echo e($game->name); ?></a></th>
                <th><?php echo e($game->category_id); ?></th>
                <th><?php echo e($game->created_at); ?></th>
                <th>
                    <?php if($game->active): ?>
                    <span style="color: green">Activo</span>
                    <?php else: ?>
                    <span style="color: red">Inactivo</span>
                    <?php endif; ?>
                </th>
                <th>
                    <a href="<?php echo e(route('deleteGame', $game->id )); ?>">Eliminar</a>
                </th>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <th>Sin videojuegos</th>
            </tr>
            <?php endif; ?>

        </tbody>
    </table>

</body>

</html><?php /**PATH C:\Users\LENOVO\crud-app\resources\views/index.blade.php ENDPATH**/ ?>