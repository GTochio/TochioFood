@extends('adminlte::page')

@section('title', "Permissoes do Perfil {$profile->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('profile.index')}}" class="active">Permissoes</a></li>
        
    </ol>

    <h1>Permissoes do Perfil {{  $profile->name  }} 
        <a href="{{route('profile.permissions.available', $profile->id)}}"class="btn btn-dark"><i class="fas fa-plus-square"></i> Adicionar Nova Permissao</a>
    </h1>
{{-- // --}}
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                         <th width="50">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>
                            {{$permission->name}}
                        </td>
            
                        <td style="width=10px;">

                            <a href="{{ route('profile.permissions.detach', [$profile->id, $permission->id])  }}" class="btn btn-danger">DESVINCULAR</a>
                            {{-- <a href="{{ route('permission.show', $permission->id)}}" class="btn btn-warning">VER</a>
                            <a href="{{ route('permission.permissions', $permission->id)}}" class="btn btn-warning"><i class="fas fas-lock"></i></a> --}}
                            
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