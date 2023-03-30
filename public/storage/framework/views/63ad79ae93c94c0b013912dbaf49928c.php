

<div class="mb-3">
    <label for="Nombre">Nombre:</label>
    <input type="text" name="name" value="<?php echo e(isset( $employe->name)?$employe->name:''); ?>" id="name">
</div>
<div class="mb-3">
    <label for="Apellido">Apellido:</label>
    <input type="text" name="lastname" value="<?php echo e(isset( $employe->lastname)?$employe->lastname:''); ?>" id="lastname">
</div>
<div class="mb-3">
    <label for="Email">Email:</label>
    <input type="text" name="email" value="<?php echo e(isset( $employe->email)?$employe->email:''); ?>" id="email">
</div>
<div class="mb-3">
    <label for="Foto">Foto:</label>
    <td>
        <?php if(isset($employe->photo)): ?>
            <img src="<?php echo e(asset('storage').'/'.$employe->photo); ?>" alt="imagen de perfil" width="200px">
        <?php endif; ?>
    </td>
    <input type="file" name="photo" id="photo">
</div>


<div class="mb-3 form-check">
    <input type="submit" value="<?php echo e($mode); ?> registro" class="btn btn-success">
</div><?php /**PATH D:\Work Programs\Apache\httpd-2.4\Apache24\www\CRUD_tutorial\resources\views/employe/form.blade.php ENDPATH**/ ?>