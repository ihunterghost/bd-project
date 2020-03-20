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
                    BUSCAR ESTRELA-SIST
                </div>
                <div class="card-body">
                    <form action="{{route('estrelasist.readresponse')}}" method="get">
                        <p class="text">
                            Id da Estrela-Sist
                        <br>
                            <input type="text" name="id_estrelasist" placeholder="informe o estrela" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Buscar</button>
                            <a class=" badge badge-secondary" href="{{route('estrelasist')}}" name="back">Voltar</a>
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