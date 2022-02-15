@extends('layout')
@section('title') Регистрация @endsection
@section('content')


{{-- Добавление клиентов --}}

<form class="container text-center">
    @if($errors->any())
    @foreach($errors->all as $error)
        {{$error}}
    @endforeach
@endif
    @csrf
    <div class="text-center mb-4">
      <img class="mb-4" src="/Downloads/Aлые паруса вариант 2.jpg" alt="logo bootstrap" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">АЛЫЕ ПАРУСА</h1>
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
    </div>

    <div class="form-label-group mb-3">
      <label for="email">Email: </label>
      <input type="email" name="email" id="email" placeholder="Email" required="">
    </div>
  
    <div class="form-label-group mb-3">
        <label for="password">Пароль: </label>
        <input type="password" name="password" id="password" placeholder="Пароль" required="">
    </div>

    <div class="form-label-group mb-3">
        <label for="password2">Повторите пароль: </label>
        <input type="password" name="password2" id="password2" placeholder="Повторите пароль" required="">
    </div>

    <button class="btn btn-lg btn-danger btn-block" type="submit" name="come">Далее</button>
  </form>
   
  

  

@endsection 