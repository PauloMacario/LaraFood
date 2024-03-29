@extends('adminlte::page')

@section('title', "Editar o detalhe ao plano {$detail->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item "><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item "><a href="{{ route('details.plan.index', $plan->url) }}" aria-current="page">Detalhes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
    <h1>Editar detalhe do plano <b class="text-success">{{ $detail->name }}</b></h1> 
@stop

@section('content')    
    <div class="card">      
        <div class="card-body">
            <form action="{{ route('details.plan.update', [$plan->url, $detail->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.pages.plans.details._partials.form')
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection