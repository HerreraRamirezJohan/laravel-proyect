Mostrar las lista de empleados.
<a href="<?php echo e(url('/employe/create')); ?>" class="btn btn--primary">Crear</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $employe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <tr class="">
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->photo); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->lastname); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td>
                    Editar
                    |
                    <form action="<?php echo e(url('/employe/'.$item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                        <input type="submit" onclick="return confirm('Deseas borrar?')" value="Borrar">
                    </form>
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\Laravel 8.0\CRUD_tutorial\resources\views/employe/index.blade.php ENDPATH**/ ?>