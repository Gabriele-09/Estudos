<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Consumo Api</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="campo">
        <h2 id="titulo">Consulta CEP</h2>
        <p id="subtitulo">Digite o CEP para encontrar o endereço</p>
        <br>
    </div>

    <form action="{{ url('/cep') }}" method="get">
        @csrf
        <fieldset class="grupo">
            <div class="campo">
                <label>CEP</label>
                <input type="text" placeholder="Digite um cep..." name="cep" required>
                <input type="submit">
            </div>
        </fieldset>

        <fieldset class="grupo">
            @if(!is_null($endereco))
            <h3>Resultados</h3>
            <div class="campo">
                <label for="rua">Rua:</label>
                <input type="text" name="rua" value="{{$endereco->logradouro}}">
            </div>

            <div class="campo">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" value="{{$endereco->bairro}}">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" value="{{$endereco->localidade}}">
            </div>
            <div class="campo">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" value="{{$endereco->uf}}">
            </div>
            @endif
            @if(is_null($endereco))
            <h3>Nenhum endereço encontrado!</h3>
            @endif
        </fieldset>
    </form>


</body>
</html>