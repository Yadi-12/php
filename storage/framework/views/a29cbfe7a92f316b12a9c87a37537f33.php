<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if($categoryGame): ?>
    <h1>El nombre de videojuego es: <?php echo e($nameVideogame); ?> y la categoria es: <?php echo e($categoryGame); ?></h1>
    <?php else: ?>
    <h1>El nombre de videojuego es: <?php echo e($nameVideogame); ?></h1>
    <?php endif; ?>

    
    <h3><?php echo e($fecha); ?></h3>
</body>

</html><?php /**PATH C:\Users\LENOVO\crud-app\resources\views/show.blade.php ENDPATH**/ ?>