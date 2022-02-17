@extends('layout')
@section('content')

<div class="container d-flex flex-column text-center">
    <div class="text-center mb-2">
      <img src="/img/main.jfif" alt="logo bootstrap" width="200">
      <h2 class="mb-3" style="font-weight: 600;">Подробнее о клиенте</h2>
    </div>
    
    <div class="card mx-auto w-100">
      <div class="card-body">
        <div class="d-flex">
          <span>{{$client->lastname}}</span>
          <span class="mx-auto">{{$client->firstname}}</span>
          <span>{{$client->fathername}}</span>
        </div>

        <div class="d-flex my-2">
          <span class="me-auto">{{$client->data}}</span>
          <span>{{$client->created_at}}</span>
        </div>
       
        <div class="d-flex gap-2 mt-1">
          <a href="/edit/{{$client->id}}" class="btn btn-warning w-50">Редактировать</a>
          <a href="/delete/{{$client->id}}" class="btn btn-danger w-50">Удалить</a>
        </div>

        <div>
          <a href="/storage/file/{{$client->file}}" download="" class="btn btn-success w-100 mt-2">Скачать файл <i class="bi bi-file-earmark-text"></i></a>
        </div>

      </div>
  </div>
      
</div>

@endsection 