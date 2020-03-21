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
                    CADASTRAR SISTEMA PLANETÁRIO
                </div>
                <div class="card-body">
                    <form action="{{route('sist.createresponse')}}" method="post">
                        @csrf
                        <p>
                            Nome
                        <br>
                            <input type="text" name="nome_sist" placeholder="informe o nome" required="required"> 
                        </p>
                        <p>
                            Idade
                        <br>
                            <input type="text" name="idade_sist" placeholder="informe a idade" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p>
                            Galáxia
                        <br>
                            <input type="text" name="galaxia" placeholder="informe a galaxia" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary"name="send">Cadastrar</button>
                            <a class=" badge badge-secondary" href="{{ route('sist')}}" name="back">Voltar</a>
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