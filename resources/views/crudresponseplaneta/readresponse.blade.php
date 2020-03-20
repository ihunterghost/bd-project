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
                    BUSCAR PLANETA
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID</b></div>
                        <div class="col bg-secondary"><b>NOME</b></div>
                        <div class="col bg-secondary"><b>TAMANHO</b></div>
                        <div class="col bg-secondary"><b>PESO</b></div>
                        <div class="col bg-secondary"><b>VELOCIDADE ROT</b></div>
                        <div class="col bg-secondary"><b>COMPRIMENTO</b></div>
                        <div class="col bg-secondary"><b>POSSUI SATÉLITE</b></div>
                    </div>
                </div>
                @foreach ($planeta as $planeta)
                        <div class="container">
                            <div class="row text-center">
                                <div class="col">{{$planeta->id_planeta}}</div>
                                <div class="col">{{$planeta->nome_planeta}}</div>
                                <div class="col">{{$planeta->tam_planeta}}</div>
                                <div class="col">{{$planeta->peso_planeta}}</div>
                                <div class="col">{{$planeta->vel_rotacao}}</div>
                                <div class="col">{{$planeta->comp_planeta}}</div>
                                <div class="col">{{$planeta->possui_sn_planeta}}</div>
                            </div>
                        </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('planeta') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection