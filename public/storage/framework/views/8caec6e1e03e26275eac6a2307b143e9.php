
<?php $__env->startSection('content'); ?>

<div class="container">

    Formulario de edicion de empleado.
    

    <br>
    <form action="<?php echo e(url('/employe/'.$employe->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('PATCH')); ?>

        <?php echo $__env->make('employe.form', ['mode'=>'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <a href="<?php echo e(url('/employe')); ?>" class="btn btn-primary">Regresar</a>
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work Programs\Apache\httpd-2.4\Apache24\www\CRUD_tutorial\resources\views/employe/edit.blade.php ENDPATH**/ ?>