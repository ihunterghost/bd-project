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
                    BUSCAR GALÁXIA
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID</b></div>
                        <div class="col bg-secondary"><b>NOME</b></div>
                        <div class="col bg-secondary"><b>DIST</b></div>
                        <div class="col bg-secondary"><b>QTD SIST</b></div>
                    </div>
                </div>
                @foreach ($galaxia as $galaxia)
                <div class="container">
                    <div class="row text-center">
                        <div class="col">{{$galaxia->id_galaxia}}</div>
                        <div class="col">{{$galaxia->nome_galaxia}}</div>
                        <div class="col">{{$galaxia->dist_terra}}</div>
                        <div class="col">{{$galaxia->qtd_sistemas}}</div>
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('galaxia') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection