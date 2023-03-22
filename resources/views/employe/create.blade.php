@extends('layouts.app')
@section('content')

<div class="container">

    Formulario de creacion de empleado.
    {{-- Multipart/form-data nos da la capacidad de enviar archivos. --}}
    
    <form action="{{route('employe.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('employe.form', ['mode'=>'Crear'])
        
        <a href="{{url('/employe')}}" class="btn btn-primary">Regresar</a>
    </form>
    
</div>
@endsection
