@extends('template/template')
@section('conteudo')
<h1>Fornecedores</h1>
<div class="button"><a href="{{url('/providers/add')}}">Adicionar Fornecedor</a></div>

<input type="text" id="busca" data-type="search_clients" />

<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    @foreach($providers as $provider)
    <tr>
        <td>{{$provider->name}}</td>
        <td width="100">{{$provider->phone}}</td>
        <td width="150">{{$provider->email}}</td>
        <td width="160" style="text-align:center">
            <div class="button button_small"><a href="{{url('/providers/edit', $provider->id)}}">Editar</a></div>
            <form method="POST" action="{{ url('/providers/destroy', $provider->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $providers->links() !!}
@stop