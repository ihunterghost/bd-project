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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    BURACO NEGRO
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID BURACO NEGRO</b></div>
                        <div class="col bg-secondary"><b>NOME ESTRELA</b></div>
                    </div>
                </div>
                @foreach ($buraconegro as $buraconegro)
                        <div class="container">
                            <div class="row text-center">
                                <div class="col">{{$buraconegro->id_buraconegro}}</div>
                                <div class="col">{{$buraconegro->nome_estrela}}</div>
                            </div>
                        </div>
                @endforeach
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('buraconegro') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection