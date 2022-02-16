@extends('layout')
@section('content')


<div class="container text-center">
    <div class="text-center mb-4">
      <img src="/img/main.jfif" alt="logo bootstrap" width="200">
      <h2 class="mb-3" style="font-weight: 600;">Клиенты</h2>
    </div>
    
    <a href="/add_client" class="btn btn-lg btn-danger btn-block w-100 mb-1" type="submit" name="come">Добавить</a>

    <div class="row mx-1">

      @foreach($clients as $client)
        <div class="col d-flex flex-column bg-light rounded-3 shadow-sm pt-2 pb-1 px-3 mt-3">
          <a href="#" class="text-decoration-none text-dark">
            <div class="d-flex my-1">
              <span class="me-auto">{{$client->firstname}}</span>
              <span class="mx-2">{{$client->lastname}}</span>
              <span class="ms-auto">{{$client->fathername}}</span>
            </div>
            <div class="d-flex mb-1">
              <div>{{$client->data}}</div>
              <div class="ms-auto">{{$client->created_at}}</div>              
            </div>
          </a>
          <div class="d-flex gap-2 my-1">
            <a href="#" class="btn btn-warning w-50">Редактировать</a>
            <a href="#" class="btn btn-danger w-50">Удалить</a>
          </div>
        </div>
      @endforeach

    </div>
    
</div>

@endsection 