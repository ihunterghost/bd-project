@extends('layouts.app')

@section('content')
<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    SATÉLITE NATURAL
                </div>

                <div class="card-body text-center" style="font-size: 17px;">
                    <a class="badge badge-primary" href="{{ route('sn.create') }}">Cadastrar</a>
                    <a class="badge badge-primary" href="{{ route('sn.read') }}">Buscar</a>
                    <a class="badge badge-primary" href="{{ route('sn.update') }}">Modificar</a>
                    <a class="badge badge-primary" href="{{ route('sn.delete') }}">Apagar</a>
                </div>
                <p class="text-center">
                    <a class="badge badge-secondary" href="{{ route('welcome') }}">Voltar</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection