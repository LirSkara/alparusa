@extends('layout')
@section('title') Войти в аккаунт @endsection
@section('content')

<div class="container text-center" style="padding-top: 40%;">
    <div class="text-center mb-4">
      <img class="mb-3" src="http://www.scarletsails-derbent.ru/front/images/bg/logo.svg" alt="logo bootstrap" width="72">
      <h3 class="mb-3" style="font-weight: 600;">АЛЫЕ ПАРУСА</h3>
    </div>

    <form action="/register" method="POST">
    @csrf

      <div class="form-floating mb-3">
        <input type="tel" data-tel-input name="tel" class="form-control" id="floatingInput" placeholder="Телефон">
        <label for="floatingInput">Телефон</label>
        @error('tel')<div class="text-danger">{{$message}}</div>@enderror
      </div>
    
      <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Имя">
        <label for="floatingInput">Пароль</label>
        @error('password')<div class="text-danger">{{$message}}</div>@enderror
      </div>

      <div class="form-floating mb-3">
        <input type="password" name="password_confirmation" class="form-control" id="floatingInput" placeholder="Имя">
        <label for="floatingInput">Повторите пароль</label>
        @error('password_confirmation')<div class="text-danger">{{$message}}</div>@enderror
      </div>

      <button class="btn btn-lg btn-danger btn-block w-100" type="submit" name="come">Зарегистрироваться</button>

    </form>
    
</div>

@endsection