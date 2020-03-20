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
                    MODIFICAR ESTRELA
                </div>
                <div class="card-body">
                    <form action="{{route('estrela.updateresponse')}}" method="post">
                        @csrf
                        <p>
                            Informe o id da Estrela 
                        <br>
                            <input type="text" name="id_estrela" placeholder="informe o identificador" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                        </p>
                        <p>
                            Nome
                        <br>
                            <input type="text" name="nome_estrela" placeholder="informe o nome" required="required"> 
                        </p>
                        <p>
                            Tamanho
                        <br>
                            <input type="text" name="tam_estrela" placeholder="informe o tamanho" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p>
                            Idade
                        <br>
                            <input type="text" name="idade_estrela" placeholder="informe a idade" required="required"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        <p class="text">
                            Distância em relação à Terra
                        <br>
                            <input type="text" name="dist_terra_estrela" placeholder="informe a distancia" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p>
                            Tipo
                        <br>
                            <input list="tipos" name="tipo">
                                <datalist id="tipos">
                                    <option value="Anã Vermelha">
                                    <option value="Anã Branca">
                                    <option value="Estrela Binária">
                                    <option value="Gigante Azul">
                                    <option value="Gigante Vermelho">
                                </datalist>
                        </p>
                        <p>
                            Morreu?
                        <br>
                            <input list="mortes" name="morreu">
                                <datalist id="mortes">
                                    <option value="Sim">
                                    <option value="Não">
                                </datalist>
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary" name="send">Modificar</button>
                            <a class=" badge badge-secondary" href="{{ route('estrela')}}" name="back">Voltar</a>
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