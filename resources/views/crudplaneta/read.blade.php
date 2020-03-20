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
                    BUSCAR PLANETA
                </div>
                <div class="card-body">
                    <form action="{{route('planeta.readresponse')}}" method="get">
                        <p class="text">
                            Nome do planeta
                        <br>
                            <input type="text" name="nome_planeta" placeholder="informe o Planeta" required="required">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Buscar</button>
                            <a class=" badge badge-secondary" href="{{route('planeta')}}" name="back">Voltar</a>
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