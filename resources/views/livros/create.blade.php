<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo livro</title>
    <style>
        label {
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>
    <form action="{{ route('salvar_livro') }}" method="post">
     @csrf
        <div><label for="isbn">ISBN</label> <input type="text" name="isbn" id="isbn"> </div>
        <div><label for="nome">NOME</label> <input type="text" name="nome" id="nome"> </div>
        <div><label for="custo">AUTOR</label> <input type="text" name="autor" id="autor"> </div>
        <div><label for="preco">PRECO</label> <input type="text" name="preco" id="preco"> </div>
        <button type='submit'>Salvar</button>
    </form>
</body>
</html>