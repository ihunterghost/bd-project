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
                    BUSCAR ORBITA
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID ORBITA</b></div>
                        <div class="col bg-secondary"><b>NOME PLANETA</b></div>
                        <div class="col bg-secondary"><b>NOME ESTRELA</b></div>
                        <div class="col bg-secondary"><b>NOME SATELITE NATURAL</b></div>
                    </div>
                </div>
                @foreach ($orbitar as $orbitar)
                        <div class="container">
                            <div class="row text-center">
                                <div class="col">{{$orbitar->id_orbitar}}</div>
                                <div class="col">{{$orbitar->nome_planeta}}</div>
                                <div class="col">{{$orbitar->nome_estrela}}</div>
                                <div class="col">{{$orbitar->nome_sn}}</div>
                            </div>
                        </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('orbitar') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection