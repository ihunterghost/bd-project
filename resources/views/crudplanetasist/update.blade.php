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
                    MODIFICAR PLANETA-SIST
                </div>
                <div class=" card-body">
                    <form action="{{route('planetasist.updateresponse')}}" method="post">
                        @csrf
                        <p>
                            Informe o id do Planeta-Sist
                        <br>
                            <input type="text" name="id_planetasist" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p class="text">
                            Id do Planeta 
                        <br>
                            <input type="text" name="planeta" placeholder="informe o nome" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p class="text">    
                            Id do Sistema Planetário
                        <br>
                            <input type="text" name="sist_planetario" placeholder="informe oo ID" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p class= " text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Modificar</button>
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