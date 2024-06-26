<?php $__env->startSection('producto'); ?>
    <?php if($categorias->isEmpty()): ?>
        <div class="w-full lg:w-1/2 mx-auto mb-4">
            <p class="my-8 text-red-600 bg-red-100 border border-red-600 rounded-md px-4 py-2 mb-4">
                <a href="<?php echo e(route('categoria.create')); ?>">
                    Primero debe registrar una categoría
                </a>
            </p>
        </div>
    <?php else: ?>
        <div class="w-full lg:w-1/2 mx-auto my-4">
            <h2 class="text-2xl font-bold text-black mt-8 mb-4 ml-4 uppercase">Actualizar Producto:</h2>
            <form action="<?php echo e(route('producto.update', $p->id)); ?>" method="POST" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">Categoría:</label>
                        <select name="categoria" id="categoria" required class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                            <option disabled>Elige una categoría</option>
                            <?php $__empty_1 = true; $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($c->id); ?>" <?php echo e($p->categoria_id == $c->id ? 'selected' : ''); ?>><?php echo e($c->categoria); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option disabled>Registra una nueva categoría</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="marca">Marca:</label>
                        <select name="marca" id="marca" required class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                            <option disabled>Elige una marca</option>
                            <?php $__empty_1 = true; $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($m->id); ?>" <?php echo e($p->marca_id == $m->id ? 'selected' : ''); ?>><?php echo e($m->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option disabled>Registra una nueva marca</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">Foto:</label>
                    <?php if($p->imagen): ?>
                        <img src="<?php echo e(asset($p->imagen)); ?>" alt="Imagen actual" class="mb-2" width="150">
                        <input type="hidden" name="imagen_actual" value="<?php echo e($p->imagen); ?>">
                    <?php endif; ?>
                    <input type="file" name="foto" id="foto" accept="image/*"
                        class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required value="<?php echo e($p->nombre); ?>"
                        class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" required
                        class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500"><?php echo e($p->descripcion); ?></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="stock_min">Stock Mínimo:</label>
                        <input type="number" name="stock_min" value="<?php echo e($p->stock_min); ?>"
                            class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">Precio:</label>
                        <input type="number" name="precio" id="precio" required value="<?php echo e($p->precio); ?>"
                            class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="talla">Talla:</label>
                        <select name="talla" id="talla" required class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                            <option disabled>Elige una talla</option>
                            <?php $__empty_1 = true; $__currentLoopData = $tallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($t->id); ?>" <?php echo e($p->talla_id == $t->id ? 'selected' : ''); ?>>
                                    <?php echo e($t->tipo_talla_numero); ?>

                                    <?php echo e($t->tipo_talla_letra); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option disabled>Registra una nueva talla</option>
                            <?php endif; ?>
                        </select>
                    </div>
    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="color">Color:</label>
                        <select name="color" id="color" required class="border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-green-500">
                            <option disabled>Elige un color</option>
                            <?php $__empty_1 = true; $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($c->id); ?>" <?php echo e($p->color_id == $c->id ? 'selected' : ''); ?>><?php echo e($c->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option disabled>Registra un nuevo color</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <button
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar</button>
                    <a href="<?php echo e(route('producto.index')); ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
                </div>
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Proyectos\SI2\TiendaRopa\resources\views/VistaProductos/edit.blade.php ENDPATH**/ ?>