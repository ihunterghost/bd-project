@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    BUSCAR ORBITA
                </div>
                <div class="card-body">
                    <form action="{{route('orbitar.readresponse')}}" method="get">
                        <p>
                            Id da relação de Orbitar
                        <br>
                            <input type="text" name="id_orbitar" placeholder="informe o identificador" required="required">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Buscar</button>
                            <a class=" badge badge-secondary"href="{{route('orbitar')}}" name="back">Voltar</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection