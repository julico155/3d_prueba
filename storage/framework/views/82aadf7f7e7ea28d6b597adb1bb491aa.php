<?php $__env->startSection('usuario'); ?>
<form action="<?php echo e(route('user.update', $u->id)); ?>" method="POST" enctype="multipart/form-data"
    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>





    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nombre:</label>
        <input type="text" name="name" id="name" required value="<?php echo e($u->name); ?>"
            class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email:</label>
        <input type="text" name="email" id="email" required value="<?php echo e($u->email); ?>"
            class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
    </div>


    <div class="flex items-center justify-between mb-4">
        <button
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar</button>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Julio\Downloads\TiendaRopa-main\TiendaRopa-main\resources\views/VistaUser/edit.blade.php ENDPATH**/ ?>