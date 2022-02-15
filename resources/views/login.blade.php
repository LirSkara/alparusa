@extends('layout')
@section('title') Войти в аккаунт @endsection
@section('content')


{{-- Добавление клиентов --}}

<form class="container text-center">
    @if($errors->any())
    @foreach($errors->all as $error)
        {{$error}}
    @endforeach
@endif
    @csrf
  <main class="form-signin">
  <form>
    <img class="mb-4" src="http://www.scarletsails-derbent.ru/front/images/bg/logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Войти в аккаунт</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Почта</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Пароль">
      <label for="password">Пароль</label>
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-danger" type="submit">Войти</button>
  </form>
</main>
   
  
</form>
  

@endsection 