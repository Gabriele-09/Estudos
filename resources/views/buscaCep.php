<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Via Cep API</title>
    <link href="resources/css/style.css" rel="stylesheet">
</head>

<body>
    <form class="form" action="." method="post">
        <div class="border">
            <div class="info">
                <h2 class="titulo">Consulta CEP</h2>
                <p>Preencha os dados para consulta</p>
            </div>

            <div class="data">
                <label>Nome</label>
                <input type="text" placeholder="Digite seu nome..." name="nome" required>
            </div>

            <div class="data">
                <label>Telefone</label>
                <input type="text" placeholder="Digite seu telefone..." name="telefone">
            </div>

            <div class="data">
                <label>CPF/CNPJ</label>
                <input type="text" placeholder="Digite seu CPF ou CNPJ..." name="cpfCnpj" required>
            </div>

            <div class="data">
                <label>CEP</label>
                <input type="text" placeholder="Digite seu CEP..." name="cep" required>
            </div>

            <div class="data btn">
                <button type="submit">CONSULTAR</button>
            </div>

            <div class="data">
                <label>Rua</label>
                <input type="text" name="rua" value="{{$endereco->logradouro}}">
            </div>

            <div class="data">
                <label>Bairro</label>
                <input type="text" name="bairro" value="{{$endereco->bairro}}">
            </div>

            <div class="data">
                <label>Cidade</label>
                <input type="text" name="cidade" value="{{$endereco->localidade}}">
            </div>

            <div class="data">
                <label>Estado</label>
                <input type="text" name="estado" value="{{$endereco->uf}}">
            </div>

            <div class="data">
                <label>IBGE</label>
                <input type="text" name="ibge" value="{{$endereco->ibge}}">
            </div>

        </div>


    </form>

</body>

</html>

https://www.youtube.com/watch?v=lXr4Z7uCufw