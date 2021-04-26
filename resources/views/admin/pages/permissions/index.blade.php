@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('permission.index')}}" class="active">Perfis</a></li>
        
    </ol>

    <h1>Permissões <a href="{{route('permission.create')}}"class="btn btn-dark"><i class="fas fa-plus-square"></i> Adicionar</a></h1>
{{-- // --}}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{route('permission.search')}}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Filtro" class="form-control" value="{{$filters['filter'] ?? ''}}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
            
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                         <th width="250">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>
                            {{$permission->name}}
                        </td>
            
                        <td style="width=10px;">

                            <a href="{{ route('permission.edit', $permission->id)}}" class="btn btn-info">EDIT</a>
                            <a href="{{ route('permission.show', $permission->id)}}" class="btn btn-warning">VER</a>
                            
                            {{-- <a href="{{ route('details.permission.index', $permission->url)}}" class="btn btn-primary">DETALHES</a>
                            
                            --}}
                            
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $permissions ->appends($filters)->links() !!}   
            @else
                {!! $permissions ->links() !!}
            @endif
            
        </div>
    </div>
@stop