@extends('template/template')
@section('conteudo')
<h1>Usuários - {{$title}}</h1>
@if(isset($errors) && count($errors) > 0) 
<div class="warn">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif
@if(isset($user))
<form method="POST" action="{{url('/users/update', $user->id)}}">
    @else
    <form method="POST" action="{{url('/users/store')}}">
        @endif
        {{ csrf_field() }}

        <label for="name">Email</label><br/>
        <input class="email" type="email" name="email" required value="{{$user->email or old('email')}}" /><br/><br/>

        <label for="email">Nome de usuário</label><br/>
        <input class="email" type="text" name="name" required value="{{$user->name or old('name')}}"/><br/><br/>

        <label for="password">Senha</label><br/>
        <input class="text" type="password" name="password" required value="{{$user->password or old('password')}}"/><br/><br/>

        <!-- <label for="group">Grupo de Permissões</label><br/>
         <select name="group" id="group" required>
        <?php //foreach ($group_list as $g): ?>
                 <option value="<?php // echo $g['id'];  ?>"><?php // echo $g['name'];  ?></option>
        <?php // endforeach; ?>
         </select><br/><br/> -->

        <input type="submit" value="Enviar" />

    </form>
    @stop
