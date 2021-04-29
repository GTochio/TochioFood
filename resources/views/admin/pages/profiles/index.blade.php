@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('profile.index')}}" class="active">Perfis</a></li>
        
    </ol>

    <h1>Perfis <a href="{{route('profile.create')}}"class="btn btn-dark"><i class="fas fa-plus-square"></i> Adicionar</a></h1>
{{-- // --}}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{route('profile.search')}}" method="POST" class="form form-inline">
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
                    @foreach ($profiles as $profile)
                    <tr>
                        <td>
                            {{$profile->name}}
                        </td>
            
                        <td style="width=10px;">

                            <a href="{{ route('profile.edit', $profile->id)}}" class="btn btn-info">EDIT</a>
                            <a href="{{ route('profile.show', $profile->id)}}" class="btn btn-warning">VER</a>
                            <a href="{{ route('profile.permissions', $profile->id)}}" class="btn btn-warning"><i class="fas fa-lock"></i></a>
                                                        
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $profiles ->appends($filters)->links() !!}   
            @else
                {!! $profiles ->links() !!}
            @endif
            
        </div>
    </div>
@stop