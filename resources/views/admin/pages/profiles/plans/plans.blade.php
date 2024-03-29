@extends('adminlte::page')

@section('title', "Planos do perfil {$profile->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item active" aria-current="page">Planos do perfil {{ $profile->name }}</li>
    </ol>
    <h1 class="text-success">Planos do perfil <b class="text-success">{{ $profile->name }}</b>
        <a href="{{ route('profiles.plans.available', $profile->id) }}" class="btn btn-success ml-3">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add novo plano
        </a>
    </h1> 
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Planos do perfil</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->description }}</td>                          
                            <td width=150">
                                <a href="{{ route('plans.profiles.detach', [$profile->id, $plan->id]) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else 
                {!! $plans->links()  !!}
            @endif
        </div>
    </div>
@stop