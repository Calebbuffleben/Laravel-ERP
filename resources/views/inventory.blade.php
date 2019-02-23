@extends('template/template')
@section('conteudo')
<h1>Estoque</h1>


<div class="button"><a href="{{ URL('/inventory/add')}}">Adicionar Produto</a></div>
<input type="text" id="busca" data-type="search_inventory" />

<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quant.</th>
        <th>Quant. Min.</th>
        <th>Ações</th>
    </tr>
    @foreach($inventory_list as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></td>
            <td width="60" style="text-align:center">{{$product->quant}}</td>
            <td width="90" style="text-align:center"><?php
               /* if ($product['min_quant'] > $product['quant']) {
                    echo '<span style="color:red">' . ($product['min_quant']) . '</span>';
                } else {
                    echo $product['min_quant'];
                } */
                ?></td>
            <td width="160">
                <div class="button button_small"><a href="url('/inventory/edit', $product->id)}}">Editar</a></div>

            <form method="POST" action="{{ url('/inventory/destroy', $product->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
            </td>
        </tr>
    @endforeach
</table>
@stop