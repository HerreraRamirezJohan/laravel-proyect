

<div class="mb-3">
    <label for="Nombre">Nombre:</label>
    <input type="text" name="name" value="{{isset( $employe->name)?$employe->name:''}}" id="name">
</div>
<div class="mb-3">
    <label for="Apellido">Apellido:</label>
    <input type="text" name="lastname" value="{{isset( $employe->lastname)?$employe->lastname:''}}" id="lastname">
</div>
<div class="mb-3">
    <label for="Email">Email:</label>
    <input type="text" name="email" value="{{isset( $employe->email)?$employe->email:''}}" id="email">
</div>
<div class="mb-3">
    <label for="Foto">Foto:</label>
    <td>
        @if (isset($employe->photo))
            <img src="{{asset('storage').'/'.$employe->photo}}" alt="imagen de perfil" width="200px">
        @endif
    </td>
    <input type="file" name="photo" id="photo">
</div>


<div class="mb-3 form-check">
    <input type="submit" value="{{$mode}} registro" class="btn btn-success">
</div>