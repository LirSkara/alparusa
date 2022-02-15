@extends('layout')
@section('title') Войти в аккаунт @endsection
@section('content')
    <div class="container pt-3 pt-md-1">
        <div class="col-md-10 mx-auto col-lg-5 mt-2">
            <div class="container text-center justify-content-center">
              <img src="/public/img/main.jfif" alt="loading..." width="70%">
                   <h2 style="font-weight: 600">Алые Паруса</h2>
            </div>
            <form action="/sign" method="POST" class="p-4 p-md-5 mt-2">
                @csrf
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                @endif
              <div class="form-floating mb-3">
                <input type="tel" name="tel" class="form-control bg-light" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Введите номер</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control bg-light" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
              </div>
              <div class="d-flex justify-content-center">
                  <button class="w-75 btn btn-lg btn-danger" type="submit">Войти</button>
                </div>
                <div class="text-center mt-2"><a href="/register" class="text-decoration-none" type="submit">Регистрация</a></div>
            </form>
          </div>
    </div>
@endsection 