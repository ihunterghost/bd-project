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
                    BUSCAR ESTRELA-SIST
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID ESTRELA-SIST</b></div>
                        <div class="col bg-secondary"><b>NOME DA ESTRELA</b></div>
                        <div class="col bg-secondary"><b>NOME SISTEMA</b></div>
                    </div>
                </div>
                @foreach ($estrelasist as $estrelasist)
                        <div class="container">
                            <div class="row text-center">
                                <div class="col">{{$estrelasist->id_estrelasist}}</div>
                                <div class="col">{{$estrelasist->nome_estrela}}</div>
                                <div class="col">{{$estrelasist->nome_sist}}</div>
                            </div>
                        </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('estrelasist') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection