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
                    BUSCAR ESTRELA
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col bg-secondary"><b>ID</b></div>
                        <div class="col bg-secondary"><b>NOME</b></div>
                        <div class="col bg-secondary"><b>TAMANHO</b></div>
                        <div class="col bg-secondary"><b>IDADE</b></div>
                        <div class="col bg-secondary"><b>POSSUI SATÉLITE</b></div>
                        <div class="col bg-secondary"><b>DIST</b></div>
                        <div class="col bg-secondary"><b>TIPO</b></div>
                        <div class="col bg-secondary"><b>MORTE</b></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row text-center">
                        @foreach ($estrela as $estrela)
                            <div class="col">{{$estrela->id_estrela}}</div>
                            <div class="col">{{$estrela->nome_estrela}}</div>
                            <div class="col">{{$estrela->tam_estrela}}</div>
                            <div class="col">{{$estrela->idade_estrela}}</div>
                            <div class="col">{{$estrela->possui_sn_estrela}}</div>
                            <div class="col">{{$estrela->dist_terra_estrela}}</div>
                            <div class="col">{{$estrela->tipo}}</div>
                            <div class="col">{{$estrela->morte}}</div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                    <a class=" badge badge-secondary" href="{{ route('estrela') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection