<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
        <h1>Produtos</h1>
        
        <form action="/editar-produto/{{ $produto-> id }}" method="POST">
            @csrf
            <label for="lblNome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}">
        <br><br>
        <label for="lblValor">Valor:</label>
        <input type="text" name="valor" value="{{ $produto->valor }}">
        <br><br>
        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="{{ $produto->estoque }}">
        <br><br>
        <button>editar</button>
        </form>
    </body>
</html>