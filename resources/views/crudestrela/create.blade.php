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
                    CADASTRAR ESTRELA
                </div>
                <div class="card-body">
                    <form action="{{route('estrela.createresponse')}}" method="post">
                        @csrf
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
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
                        <p>
                            Distância em relação à Terra
                        <br>
                            <input type="text" name="dist_terra_estrela" placeholder="informe a distancia" required="required"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46">
                        </p>
			            <p>
                            Tipo
                        <br>
		                    <input type="radio" id="av" name="tipo" value="Anã Vermelha">
                            <label for="av">Anã Vermelha</label>
                            <input type="radio" id="ab" name="tipo" value="Anã Branca">
                            <label for="ab">Anã Branca</label>
                            <input type="radio" id="eb" name="tipo" value="Estrela Binária">
                            <label for="eb">Estrela Binária</label>
                            <input type="radio" id="ga" name="tipo" value="Gigante Azul">
                            <label for="ga">Gigante Azul</label>
                            <input type="radio" id="gv" name="tipo" value="Gigante Vermelho">
                            <label for="gv">Gigante Vermelha</label>
                        </p>
			            <p>
                            Morreu?
                        <br>
                            <input type="radio" id="sim" name="morte" value="Sim">
			                <label for="sim">Sim</label>
			                <input type="radio" id="nao" name="morte" value="Não">
			                <label for="nao">Não</label>
                        </p>
                        <p class="text-center">
                            <button type="submit" class=" badge badge-primary"name="send">Cadastrar</button>
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
