@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    BUSCAR SISTEMA PLANETÁRIO
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID</b></div>
                        <div class="col bg-secondary"><b>NOME</b></div>
                        <div class="col bg-secondary"><b>QTD PLANETAS</b></div>
                        <div class="col bg-secondary"><b>QTD ESTRELAS</b></div>
                        <div class="col bg-secondary"><b>IDADE SIST</b></div>
                        <div class="col bg-secondary"><b>GALÁXIA</b></div>
                    </div>
                </div>
                @foreach ($sist as $sist)
                <div class="container">
                    <div class="row text-center">
                        <div class="col">{{$sist->id_sist}}</div>
                        <div class="col">{{$sist->nome_sist}}</div>
                        <div class="col">{{$sist->qtd_planetas}}</div>
                        <div class="col">{{$sist->qtd_estrelas}}</div>
                        <div class="col">{{$sist->idade_sist}}</div>
                        <div class="col">{{$sist->galaxia}}</div>
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary"href="{{ route('sist') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection