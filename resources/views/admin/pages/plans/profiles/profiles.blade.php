@extends('adminlte::page')

@section('title', "Perfis do Plano {$plan->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}">Planos</a></li>
        <li class="breadcrumb-item active"><a href="{{route('plans.profiles',$plan->id)}}" class="active">Perfis</a></li>
        
    </ol>

    <h1>Perfis do Plano {{  $plan->name  }} 
        <a href="{{route('plans.profiles.available', $plan->id)}}"class="btn btn-dark"><i class="fas fa-plus-square"></i> Adicionar Novo Perfil</a>
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
                    @foreach ($profiles as $profile)
                    <tr>
                        <td>
                            {{$profile->name}}
                        </td>
            
                        <td style="width=10px;">

                            <a href="{{ route('plan.profiles.detach', [$plan->id, $profile->id])  }}" class="btn btn-danger">DESVINCULAR</a>
                            {{-- <a href="{{ route('profile.show', $profile->id)}}" class="btn btn-warning">VER</a>
                            <a href="{{ route('profile.profiles', $profile->id)}}" class="btn btn-warning"><i class="fas fas-lock"></i></a> --}}
                            
                            {{-- <a href="{{ route('details.profile.index', $profile->url)}}" class="btn btn-primary">DETALHES</a>
                            
                            --}}
                            
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