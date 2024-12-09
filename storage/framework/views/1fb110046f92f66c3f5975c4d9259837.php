<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Library'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('books.index')); ?>">Biblioteca Virtuală</a>
        </div>
    </nav>
    <main class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="text-center mt-4">
        <p>&copy; <?php echo e(date('Y')); ?> Biblioteca Virtuală. Toate drepturile rezervate.</p>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\User\Herd\library\resources\views/layouts/app.blade.php ENDPATH**/ ?>