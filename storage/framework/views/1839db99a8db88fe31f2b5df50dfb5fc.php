

<?php $__env->startSection('content'); ?>
    <h1>Lista de cărți</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary mb-3">Adaugă carte</a>

    <ul class="list-group">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($book->title); ?> - <?php echo e($book->author); ?> (<?php echo e($book->category->name); ?>)
                <form action="<?php echo e(route('books.destroy', $book)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm">Șterge</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Herd\library\resources\views/books/index.blade.php ENDPATH**/ ?>