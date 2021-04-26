@extends('adminlte::page')

@section('title', "Editar Perfil {$profile->name}")

@section('content_header')
    <h1>Editar Plano </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('profile.update', $profile->id)}}" class="form" method="POST">
                @csrf 
                @method('PUT')

                @include('admin.pages.profiles._partials.form')
                </div>
            </form>
        </div>
    </div>
@stop