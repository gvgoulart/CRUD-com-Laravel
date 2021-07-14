<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar livro</title>
</head>
<body>
    <form action="{{route ('atualizar_livro', ['id' => $livro->id])}}" method="post">
    @csrf
        <div><label for="isbn">ISBN</label>
        <input type="text" name="isbn" id="isbn" value="{{$livro->isbn}}">
        </div>
        <div><label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" value="{{$livro->nome}}">
        </div>
        <div><label for="custo">AUTOR</label>
        <input type="text" name="autor" id="autor" value="{{$livro->autor}}">
        </div>
        <div><label for="preco">PREÇO</label>
        <input type="text" name="preco" id="preco" value="{{$livro->preco}}">
        </div>
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>