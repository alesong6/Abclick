<h1>Cadastro</h1>

<form action="/cadastro" method="POST">
    <input type="text" name="titulo">

    <input type="submit" value="Cadastrar">

</form>

<table>
<tr>
    <th>Titulo</th>
    <th>Descrição</th>
    <th>Imagem</th>
    <th></th>
</tr>
@php
    $portfolios = App\Models\Usuarios::all();
@endphp

@foreach ($portfolios as $portfolio)
    <tr>
        <td>{{ $portfolio->titulo }}</td>
        <td>{{ $portfolio->descricao }}</td>
        <td>{{ $portfolio->imagem }}</td>
        <td><a href="/apagar/{{$portfolio->id}}">apagar</a> <br> <a href="#">Editar</a></td>
    </tr>

@endforeach
</table>
