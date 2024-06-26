<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Stylo store</title>
        <link rel="icon" href="<?php echo e(asset('img/logotitle.png')); ?>" type="image/x-icon"> 

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            <?php echo e($slot); ?>

        </div>
    </body>
</html>
<?php /**PATH F:\Proyectos\SI2\TiendaRopa\resources\views/layouts/guest.blade.php ENDPATH**/ ?>