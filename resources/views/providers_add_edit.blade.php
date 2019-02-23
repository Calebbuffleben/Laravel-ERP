@extends('template/template')
@section('conteudo')
<h1>Fornecedores - {{$title}}</h1>

@if(isset($errors) && count($errors) > 0) 
<div class="warn">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif

@if(isset($provider))
<form method="POST" action="{{url('/providers/update', $provider->id)}}">
    @else
    <form method="POST" action="{{url('/providers/store')}}">
        @endif

        {{ csrf_field() }}
        <label for="name">Nome</label><br/>
        <input type="text" name="name" required value="{{$provider->name or old('name')}}"/><br/><br/>
        <label for="email">Email</label><br/>
        <input type="text" name="email" required value="{{$provider->provider or old('email')}}"/><br/><br/>
        <label for="phone">Telefone</label><br/>
        <input type="text" name="phone" required value="{{$provider->phone or old('phone')}}"/><br/><br/>

        <input type="submit" value="Enviar" />
    </form>
    <script type="text/javascript" src="/assets/js/script_providers_add.js"></script>
    @stop