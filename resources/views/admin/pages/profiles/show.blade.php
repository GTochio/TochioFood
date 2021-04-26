@extends('adminlte::page')

@section('title', "Detalhes do Perfil {$profile->name}")

@section('content_header')
    <h1>Detalhes do Plano <b>{{$profile->name}}</b> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <ul>
                <li>
                    <strong>Nome:</strong>{{$profile->name}}
                </li>
                
                <li>
                    <strong>Descricao:</strong>{{$profile->description}}
                </li>
            </ul>

            @include('admin.includes.alerts')
            
            <form action="{{    route('profile.destroy', $profile->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O PLANO {{$profile->name}}</button>
            </form>
        </div>
    </div>
@stop