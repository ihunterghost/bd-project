@extends('layouts.app')

@section('content')
<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <title>Corpos Celestes</title>

    
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    CENTRO DE COSMOLOGIA MUNDIAL
                </div>
                <div class="card-body text-center" style="font-size: 17px;">
                    <a class="badge badge-primary" href="{{ route('planeta') }}">Planeta</a>
                    <a class="badge badge-primary" href="{{ route('estrela') }}">Estrela</a>
                    <a class="badge badge-primary" href="{{ route('galaxia') }}">Galáxia</a>
                    <a class="badge badge-primary" href="{{ route('buraconegro') }}">Buraco Negro</a>
                    <a class="badge badge-primary" href="{{ route('sist') }}">Sistema Planetário</a>
                    <a class="badge badge-primary" href="{{ route('sn') }}">Satélite Natural</a>
                    <a class="badge badge-primary" href="{{ route('relacoes') }}">Relações</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
@endsection
