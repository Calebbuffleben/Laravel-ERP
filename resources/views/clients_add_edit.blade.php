@extends('template/template')
@section('conteudo')
<h1>Clientes - {{$title}}</h1>

@if(isset($errors) && count($errors) > 0) 
<div class="warn">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif

@if(isset($client))
<form method="POST" action="{{url('/clients/update', $client->id)}}">
@else
<form method="POST" action="{{url('/clients/store')}}">
@endif

    {{ csrf_field() }}
    <label for="name">Nome</label><br/>
    <input type="text" name="name" required value="{{$client->name or old('name')}}"/><br/><br/>

    <label for="email">E-mail</label><br/>
    <input type="email" name="email" value="{{$client->email or old('email')}}"/><br/><br/>

    <label for="phone">Telefone</label><br/>
    <input type="text" name="phone" value="{{$client->phone or old('phone')}}"/><br/><br/>

    <label for="stars">Estrelas</label><br/>
    <select name="stars" id="stars">
        <option value="1" @if(isset($client) && ($client->stars == 1)) selected @endif >1 Estrelas</option>
        <option value="2" @if(isset($client) && ($client->stars == 2)) selected @endif>2 Estrelas</option>
        <option value="3" @if(empty($client) || ($client->stars == 3)) selected @endif>3 Estrelas</option>
        <option value="4" @if(isset($client) && ($client->stars == 4)) selected @endif >4 Estrelas</option>
        <option value="5" @if(isset($client) && ($client->stars == 5)) selected @endif>5 Estrelas</option>
    </select><br/><br/>

    <label for="internal_obs">Observações Internas</label><br/>
    <textarea name="internal_obs" id="internal_obs"></textarea><br/><br/>

    <label for="address_zipcode">CEP</label><br/>
    <input type="text" name="address_zipcode" required value="{{$client->address_zipcode or old('address_zipcode')}}"/><br/><br/>

    <label for="address">Rua</label><br/>
    <input type="text" name="address" value="{{$client->address or old('address')}}"/><br/><br/>

    <label for="address_number">Número</label><br/>
    <input type="text" name="address_number" value="{{$client->address_number or old('address_number')}}"/><br/><br/>

    <label for="address2">Complemento</label><br/>
    <input type="text" name="address2" value="{{$client->address2 or old('address2')}}"/><br/><br/>

    <label for="address_neighb">Bairro</label><br/>
    <input type="text" name="address_neighb" value="{{$client->address_neighb or old('address_neighb')}}"/><br/><br/>
    
    <label for="address_city">Cidade</label><br/>
    <input type="text" name="address_city" value="{{$client->address_city or old('address_city')}}"/><br/><br/>
    
    <label for="address_state">Estado</label><br/>
    <input type="text" name="address_state" value="{{$client->address_state or old('address_state')}}"/><br/><br/>

 <!--    <label for="address_state">Estado</label><br/>
    <select name="address_state" onchange="changeState(this)">
        <?php // foreach ($states as $state): ?>
        <option value="RS<?php //echo $state['Uf'];  ?>"><?php // echo $state['Uf']; ?></option>
        <?php // endforeach; ?>        
    </select><br/><br/> -->

 <!--   <label for="address_city">Cidade</label><br/>
    <select name="adress_city">
        <option value="Três " ></option>
    </select> -->
    <label for="address_country">País</label><br/>
    <input type="text" name="address_country" value="{{$client->address_country or old('address_country')}}"/><br/><br/>


    <input type="submit" value="Enviar"/>

</form>
@stop
<script type="text/javascript" src="<?php// echo base_url; ?>/assets/js/script_clients_add.js"></script>