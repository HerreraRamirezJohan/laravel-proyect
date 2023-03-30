
<?php $__env->startSection('content'); ?>

<div class="container">
    Mostrar las lista de empleados.
    <?php if(Session::has('msg')): ?>
        <p style="display:block; background-color:red; color:white; fontsize:25px; margin:20px; padding:20px;">
            <?php echo e(Session::get('msg')); ?>

        </p>
    <?php endif; ?>

    <a href="<?php echo e(url('/employe/create')); ?>" class="btn btn-dark">Crear</a>

    <div class="table-responsive" style="margin-top: 20px;">
        <table class="table table-light">
            <thead>
                <tr class="table-dark">
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
                    <td>
                        <img src="<?php echo e(asset('storage').'/'.$item->photo); ?>" alt="imagen de perfil" width="200px">
                    </td>

                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->lastname); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="<?php echo e(url('/employe/'.$item->id.'/edit')); ?>" class="btn btn-warning">
                                Editar
                            </a>
    
                            <form action="<?php echo e(url('/employe/'.$item->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('DELETE')); ?>

                                <input class="btn btn-danger" type="submit" onclick="return confirm('Deseas borrar?')" value="Borrar">
                            </form>
                        </div>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work Programs\Apache\httpd-2.4\Apache24\www\CRUD_tutorial\resources\views/employe/index.blade.php ENDPATH**/ ?>