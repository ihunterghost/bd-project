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
                    MODIFICAR SATÉLITE NATURAL
                </div>
                <div class="card-body">
                    <form action="{{route('sn.updateresponse')}}" method="post">
                        @csrf
                        <p>
                            Informe o Id do Satélite Natural
                        <br>
                            <input type="text" name="id_sn" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p>
                            Nome
                        <br>
                            <input type="text" name="nome_sn" placeholder="informe o nome" required="required"> 
                        </p>
                        <p>
                            Tamanho
                        <br>
                            <input type="text" name="tam_sn" placeholder="informe o tamanho" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p>
                            Peso
                        <br>
                            <input type="text" name="peso_sn" placeholder="informe o peso" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p>
                            Comprimento
                        <br>
                            <input type="text" name="comp_sn" placeholder="informe o comprimento" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Modificar</button>
                            <a class=" badge badge-secondary" href="{{ route('sn')}}" name="back">Voltar</a>
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