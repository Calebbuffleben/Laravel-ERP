@extends('template/template')
@section('conteudo')
<h1>Produtos - {{$title}}</h1>

@if(isset($errors) && count($errors) > 0) 
<div class="warn">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif

@if(isset($inventory))

<form method="POST" action="{{url('/inventory/update', $inventory->id)}}">
    @else
    <form method="POST" action="{{url('/inventory/store')}}">
    @endif

    {{ csrf_field() }}

    <label for="name">Nome</label><br/>
    <input type="text" name="name" required value="{{$inventory->name or old('name')}}"/><br/><br/>

    <label for="price">Preço</label><br/>
    <input type="text" name="price" required value="{{$inventory->price or old('price')}}"/><br/><br/>

    <label for="quant">Quantidade em Estoque</label><br/>
    <input type="number" name="quant" required value="{{$inventory->quant or old('quant')}}"/><br/><br/>

    <label for="min_quant">Quantidade Mínima em Estoque</label><br/>
    <input type="number" name="min_quant" required value="{{$inventory->min_quant or old('min_quant')}}"/><br/><br/>

    <input type="submit" value="Adicionar" />

</form>
<script type="text/javascript" src="<?php echo base_url; ?>/assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo base_url; ?>/assets/js/script_inventory_add.js"></script>