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
                    BUSCAR SATÉLITE NATURAL
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID</b></div>
                        <div class="col bg-secondary"><b>NOME</b></div>
                        <div class="col bg-secondary"><b>TAMANHO</b></div>
                        <div class="col bg-secondary"><b>PESO</b></div>
                        <div class="col bg-secondary"><b>COMPRIMENTO</b></div>
                    </div>
                </div>
                @foreach ($sn as $sn)
                <div class="container">
                    <div class="row text-center">
                        <div class="col">{{$sn->id_sn}}</div>
                        <div class="col">{{$sn->nome_sn}}</div>
                        <div class="col">{{$sn->tam_sn}}</div>
                        <div class="col">{{$sn->peso_sn}}</div>
                        <div class="col">{{$sn->comp_sn}}</div>
                    </div>
                </div>
                @endforeach
  
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('sn') }}">Voltar</a>
                </p>
            </div>                
        </div>
    </div>
</div>
</body>
</html>
@endsection