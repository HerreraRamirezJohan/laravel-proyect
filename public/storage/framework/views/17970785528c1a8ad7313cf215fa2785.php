
<?php $__env->startSection('content'); ?>

<div class="container">

    Formulario de creacion de empleado.
    
    
    <form action="<?php echo e(route('employe.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('employe.form', ['mode'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <a href="<?php echo e(url('/employe')); ?>" class="btn btn-primary">Regresar</a>
    </form>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work Programs\Apache\httpd-2.4\Apache24\www\CRUD_tutorial\resources\views/employe/create.blade.php ENDPATH**/ ?>