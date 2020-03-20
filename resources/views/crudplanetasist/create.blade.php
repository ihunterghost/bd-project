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
                    CADASTRAR PLANETA-SIST
                </div>
                <div class="card-body">
                    <form action="{{route('planetasist.createresponse')}}" method="post">
                        @csrf
                        <p class="text">
                            Id Planeta
                        <br>
                            <input type="text" name="planeta" placeholder="informe o ID" required="required"> 
                        </p>
                        <p class="text">
                            Id Sistema Planetário
                        <br>
                            <input type="text" name="sist_planetario" placeholder="informe ID" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Cadastrar</button>
                            <a class="badge badge-secondary" href="{{ route('planetasist')}}" name="back">Voltar</a>
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