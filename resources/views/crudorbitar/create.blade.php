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
                    CADASTRAR ORBITA
                </div>
                <div class="card-body">
                    <form action="{{route('orbitar.createresponse')}}" method="post">
                        @csrf
                        <p>
                            Id da Estrela
                        <br>
                            <input type="text" name="id_estrela" placeholder="informe o identificador" 
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p>
                            Id do Planeta
                        <br>
                            <input type="text" name="id_planeta" placeholder="Informe o identificador" 
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p>
                            Id do Satélite Natural
                        <br>
                            <input type="text" name="id_sn" placeholder="informe o identificador" 
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary"name="send">Cadastrar</button>
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