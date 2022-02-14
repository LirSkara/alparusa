@extends('layout')
@section('content')


{{-- Добавление клиентов --}}

<form class="container text-center">
    <div class="text-center mb-4">
      <img class="mb-4" src="/Downloads/Aлые паруса вариант 2.jpg" alt="logo bootstrap" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">АЛЫЕ ПАРУСА</h1>
    </div>

    <div class="form-label-group mb-3">
      <label for="tel">Телефон: </label>
      <input type="tel" name="tel" id="tel" placeholder="Телефон" required="">
    </div>
  
    <div class="form-label-group mb-3">
        <label for="password">Пароль: </label>
        <input type="password" name="password" id="password" placeholder="Пароль" required="">
    </div>

    <button class="btn btn-lg btn-danger btn-block" type="submit" name="come">Войти</button>
  </form>
   

  

@endsection 