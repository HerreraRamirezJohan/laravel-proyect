@extends('layouts.app')
@section('content')

<div class="container">

    Formulario de edicion de empleado.
    

    <br>
    <form action="{{url('/employe/'.$employe->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('employe.form', ['mode'=>'Editar']){{-- Pasar informacion a otro archivo --}}

        <a href="{{url('/employe')}}" class="btn btn-primary">Regresar</a>
    </form>

</div>
@endsection