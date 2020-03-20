@extends('layouts.app')

@section('content')
<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                    CENTRO DE COSMOLOGIA ESPACIAL
                </div>
                <div class="card-body text-center" style="font-size: 17px;">
                    <div>{{$msg}}</div>
                    <a class="badge badge-secondary" href="{{$rt}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
@endsection