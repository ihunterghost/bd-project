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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    MODIFICAR GALÁXIA
                </div>
                <div class="card-body">
                    <form action="{{route('galaxia.updateresponse')}}" method="post">
                        @csrf
                        <p class="text">
                            Informe o Id da Galáxia 
                        <br>
                            <input type="text" name="id_galaxia" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p class="text">
                            Nome
                        <br>
                            <input type="text" name="nome_galaxia" placeholder="informe o nome" required="required"> 
                        </p>
                        <p class="text">
                            Distância em relação à Terra
                        <br>
                            <input type="text" name="dis_terra" placeholder="informe a distancia" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Modificar</button>
                            <a class=" badge badge-secondary" href="{{ route('galaxia')}}" name="back">Voltar</a>
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