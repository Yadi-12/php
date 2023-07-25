<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de creación de videojuegos</h1>
    <p><a href="<?php echo e(route('games')); ?>">Listar todos los juegos</a></p>
    <form action="<?php echo e(route('updateVideogame')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="game_id" value="<?php echo e($game-> id); ?>">
        <input type="text" placeholder="Nombre del videojuego" name="name_game" value="<?php echo e($game->name); ?>">
        <?php $__errorArgs = ['name_game'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <select name="categoria_id"  id="">
            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categoria->id); ?>" <?php if($categoria->id == $game->category_id): ?> selected <?php endif; ?>><?php echo e($categoria->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html><?php /**PATH C:\Users\LENOVO\crud-app\resources\views/update.blade.php ENDPATH**/ ?>