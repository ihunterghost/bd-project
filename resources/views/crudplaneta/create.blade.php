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
                    CADASTRAR PLANETA
                </div>
                <div class="card-body">
                    <form action="{{route('planeta.createresponse')}}" method="post">
                        @csrf
                        <p class="text">
                            Nome
                        <br>
                            <input type="text" name="nome_planeta" placeholder="informe o nome" required="required"> 
                        </p>
                        <p class="text">
                            Tamanho
                        <br>
                            <input type="text" name="tam_planeta" placeholder="informe o tamanho" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p class="text">
                            Peso
                        <br>
                            <input type="text" name="peso_planeta" placeholder="informe o peso" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p class="text">
                            Velocidade de rotação
                        <br>
                            <input type="text" name="vel_rotacao" placeholder="informe a velocidade de rotação" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p class="text">
                            Comprimento
                        <br>
                            <input type="text" name="comp_planeta" placeholder="informe o comprimento" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Cadastrar</button>
                            <a class="badge badge-secondary" href="{{ route('planeta')}}" name="back">Voltar</a>
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