@extends('layout')
@section('content')

<div class="container text-center">

    <div class="text-center mb-4">
      <img src="/img/main.jfif" alt="logo bootstrap" width="200">
      <h2 class="mb-3" style="font-weight: 600;">Редактировать данные</h2>
    </div>

    <form action="/edit/{{$client->id}}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="form-floating mb-3">
            <input type="text" name="firstname" value="{{$client->firstname}}" class="form-control" id="floatingInput" placeholder="Имя">
            <label for="floatingInput">Имя</label>
            @if($errors->has('firstname'))
                {{$errors->first('firstname')}}
            @endif
        </div>
    
        <div class="form-floating mb-3">
            <input type="text" name="lastname" value="{{$client->lastname}}" class="form-control" id="floatingInput" placeholder="Имя">
            <label for="floatingInput">Фамилия</label>
            @if($errors->has('lastname'))
                {{$errors->first('lastname')}}
            @endif
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="fathername" value="{{$client->fathername}}" class="form-control" id="floatingInput" placeholder="Имя">
            <label for="floatingInput">Отчество</label>
            @if($errors->has('fathername'))
                {{$errors->first('fathername')}}
            @endif
        </div>

        <div class="form-floating mb-3">
            <input type="date" name="data" value="{{$client->data}}" class="form-control" id="floatingInput" placeholder="Имя">
            <label for="floatingInput">Дата рождения</label>
            @if($errors->has('data'))
                {{$errors->first('data')}}
            @endif
        </div>

        <div class="form-label-group mb-3">
            <input type="file" class="form-control" name="file" id="file" placeholder="Файл" required="">
            @if($errors->has('file'))
                {{$errors->first('file')}}
            @endif
        </div>

        <button class="btn btn-lg btn-danger btn-block w-100" type="submit" name="add_client">Редактировать</button>

    </form>
  </div>

@endsection 