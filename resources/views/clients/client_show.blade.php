@extends('template/template')
@section('conteudo')
<h1>Cliente - {{$title}}</h1>
<p><b>Nome: </b>{{$client->name}}</p>
<p><b>Email: </b>{{$client->email}}</p>
<p><b>Telefone: </b>{{$client->phone}}</p>
<p><b>Cidade: </b>{{$client->address_city}}</p>
<p><b>CEP: </b>{{$client->address_citycode}}</p>
<p><b>Estado: </b>{{$client->address_state}}</p>
<p><b>Endere�o: </b>{{$client->address}}</p>
<p><b>Complemento: </b>{{$client->address2}}</p>
<p><b>N�mero: </b>{{$client->address_number}}</p>
<p><b>Bairro: </b>{{$client->address_neighb}}</p>
@stop