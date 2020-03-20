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
                    BUSCAR PLANETA-SIST
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID PLANETA-SIST</b></div>
                        <div class="col bg-secondary"><b>NOME PLANETA</b></div>
                        <div class="col bg-secondary"><b>NOME SISTEMA</b></div>
                    </div>
                </div>
                @foreach ($planetasist as $planetasist)
                        <div class="container">
                            <div class="row text-center">
                                <div class="col">{{$planetasist->ps.id_planetasist}}</div>
                                <div class="col">{{$planetasist->p.nome_planeta}}</div>
                                <div class="col">{{$planetasist->sp.nome_sist}}</div>
                            </div>
                        </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('planetasist') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection