@extends('layout')
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
      <h1 class="h3 mb-3 font-weight-normal">Добавление клиентов</h1>
    </div>

    <div class="form-label-group mb-3">
      <label for="firstName">Имя: </label>
      <input type="text" name="firstName" id="firstName" placeholder="Имя" required="">
    </div>
  
    <div class="form-label-group mb-3">
        <label for="lastName">Фамилия: </label>
        <input type="text" name="lastName" id="lastName" placeholder="Фамилия" required="">
    </div>

    <div class="form-label-group mb-3">
        <label for="fatherName">Отчество: </label>
        <input type="text" name="fatherName" id="fatherName" placeholder="Отчество" required="">
    </div>

    <div class="form-label-group mb-3">
        <label for="date">Дата рождения: </label>
        <input type="date" name="data" id="data" placeholder="Дата рождения" required="">
    </div>

    <div class="form-label-group mb-3">
        <input type="file" name="file" id="file" placeholder="Файл" required="">
    </div>

    <button class="btn btn-lg btn-danger btn-block" type="submit" name="add_client">Добавить</button>
  </form>
   

  

@endsection 