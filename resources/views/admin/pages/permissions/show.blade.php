@extends('adminlte::page')

@section('title', "Detalhes da Permissãps {$permission->name}")

@section('content_header')
    <h1>Detalhes da Premissão <b>{{$permission->name}}</b> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <ul>
                <li>
                    <strong>Nome:</strong>{{$permission->name}}
                </li>
                
                <li>
                    <strong>Descricao:</strong>{{$permission->description}}
                </li>
            </ul>

            @include('admin.includes.alerts')
            
            <form action="{{    route('permission.destroy', $permission->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR A PERMISSÃO {{$permission->name}}</button>
            </form>
        </div>
    </div>
@stop