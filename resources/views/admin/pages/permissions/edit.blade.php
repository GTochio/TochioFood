@extends('adminlte::page')

@section('title', "Editar Permissão {$permission->name}")

@section('content_header')
    <h1>Editar Permissãos </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('permission.update', $permission->id)}}" class="form" method="POST">
                @csrf 
                @method('PUT')

                @include('admin.pages.permissions._partials.form')
                </div>
            </form>
        </div>
    </div>
@stop