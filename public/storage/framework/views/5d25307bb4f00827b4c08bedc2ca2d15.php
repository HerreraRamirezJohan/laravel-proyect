Formulario de creacion de empleado.

<a href="<?php echo e(url('/employe')); ?>" class="btn btn-primary"><-- Regresar</a>
<form action="<?php echo e(route('employe.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
    <label for="Nombre">Nombre:</label>
    <input type="text" name="name" id="name">
    <br>

    <label for="Apellido">Apellido:</label>
    <input type="text" name="lastname" id="lastname">
    <br>

    <label for="Email">Emial:</label>
    <input type="text" name="email" id="email">
    <br>
    
    <label for="Foto">Foto:</label>
    <input type="file" name="photo" id="photo">
    <br>

    <input type="submit" value="Enviar">
    
</form><?php /**PATH D:\Laravel 8.0\CRUD_tutorial\resources\views/employe/create.blade.php ENDPATH**/ ?>