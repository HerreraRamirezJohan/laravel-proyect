@extends('layouts.app')
@section('content')

<div class="container">
    Mostrar las lista de empleados.
    @if (Session::has('msg'))
        <p style="display:block; background-color:red; color:white; fontsize:25px; margin:20px; padding:20px;">
            {{Session::get('msg')}}
        </p>
    @endif

    <a href="{{url('/employe/create')}}" class="btn btn-dark">Crear</a>

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
                @foreach ($employe as $item)
                    
                <tr class="">
                    <td>{{$item->id}}</td>
                    <td>
                        <img src="{{asset('storage').'/'.$item->photo}}" alt="imagen de perfil" width="200px">
                    </td>

                    <td>{{$item->name}}</td>
                    <td>{{$item->lastname}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{url('/employe/'.$item->id.'/edit')}}" class="btn btn-warning">
                                Editar
                            </a>
    
                            <form action="{{url('/employe/'.$item->id)}}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}{{-- Cambiamos el valor de POST por DELETE para realizar el metodo correspondiente --}}
                                <input class="btn btn-danger" type="submit" onclick="return confirm('Deseas borrar?')" value="Borrar">
                            </form>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
