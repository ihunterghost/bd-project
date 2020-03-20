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
                    MODIFICAR ORBITA
                </div>
                <div class="card-body">
                    <form action="{{route('orbitar.updateresponse')}}" method="post">
                        @csrf
                        <p>
                            Informe o id da relação de Orbitar 
                        <br>
                            <input type="text" name="id_orbitar" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p>
                            ID do Planeta
                        <br>
                            <input type="text" name="planeta" placeholder="informe o identificador" required="required"> 
                        </p>
                        <p>
                            ID da Estrela
                        <br>
                            <input type="text" name="estrela" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p>
                            ID do Satélite Natural
                        <br>
                            <input type="text" name="sn" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Modificar</button>
                            <a class=" badge badge-secondary" href="{{ route('orbitar')}}" name="back">Voltar</a>
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