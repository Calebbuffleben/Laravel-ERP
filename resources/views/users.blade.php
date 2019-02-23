@extends('template/template')
@section('conteudo')
<h1>Usuários</h1>
<div class="button"><a href="{{ URL('/users/add')}}">Adicionar Usuário</a></div>

<table border="0" width="100%">
    <tr>
        <th>Nome de usuário</th>
        <th>Grupo de Permissões</th>
        <th>Ações</th>
    </tr>
    @foreach ($user as $us):
        <tr>
            <td>{{$us->name}}</td>
            <td width="200">Grupo 1</td>
            <td width="160">
                <div class="button button_small"><a href="{{ url('/users/edit', $us->id)}}">Editar</a></div>
                <form method="POST" action="{{ url('/users/destroy', $us->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
            </td>
        </tr>
        @endforeach;
</table>
{!! $user->links() !!}
@stop