@extends('template/template')
@section('conteudo')
<h1>Clientes</h1>
<div class="button"><a href="{{ URL('/clients/add')}}">Adicionar Cliente</a></div>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Estrelas</th>
        <th>Ações</th>
    </tr>
    @foreach ($clients as $client)
    <tr>
        <td>{{$client->name}}</td>
        <td width="100">{{$client->phone}}</td>
        <td width="150">{{$client->address_city}}</td>
        <td width="70" style="text-align:center">{{$client->stars}}</td>
        <td width="160" style="text-align:center">
            <?php // if ($edit_permission): ?>
            <div class="button button_small"><a href="{{ url('/clients/edit', $client->id)}}">Editar</a></div>
            <form method="POST" action="{{ url('/clients/destroy', $client->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
            <?php // else: ?>
            <div class="button button_small"><a href="{{ url('/clients/show', $client->id)}}">Visualizar</a></div>
            <?php // endif; ?>
        </td>
    </tr>
    @endforeach
</table>
{!! $clients->links() !!}
@stop