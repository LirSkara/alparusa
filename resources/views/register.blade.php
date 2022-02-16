@extends('layout')
@section('title') Регистрация @endsection
@section('content')
<<<<<<< HEAD


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
    <h1 class="h3 mb-3 fw-normal">Создать аккаунт</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Почта</label>
    </div>

    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="password" placeholder="Пароль">
      <label for="password">Пароль</label>
    </div>

    <div class="form-floating">
      <input type="password2" class="form-control" id="password2" placeholder="Повторить пароль">
      <label for="password2">Повторить пароль</label>
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-danger" type="submit">Зарегистрироваться</button>
  </form>
</main>
   
  </form>

  

=======
 <div class="container mt-3 pt-md-1">
        <div class="col-md-10 mx-auto col-lg-5 mt-2">
            <div class="container text-center justify-content-center ">
              <img src="/public/img/main.jfif" alt="loading..." width="70%">
                <h2 class="text-center" style="font-weight: 600">Алые Паруса</h2>
            </div>
            <form action="/reg_user" method="post" class="p-4 p-md-5 mt-2">
                @csrf
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                @endif
              <div class="form-floating mb-3">
                <input type="tel" name="tel" class="form-control bg-light" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Введите телефон</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control bg-light" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control bg-light" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Повторите пароль</label>
              </div>
              <div class="d-flex justify-content-center">
                <button class="w-75 btn btn-lg btn-danger" type="submit">Зарегистрироваться</button>
              </div>
              <div class="d-flex justify-content-center mt-2"><a href="/login" class="w-50 ms-3 btn btn-lg me-3" type="submit">Назад</a></div>
            </form>
          </div>
    </div>  
>>>>>>> 2768ae44572f622194bb309961307bae6b466aa3
@endsection 