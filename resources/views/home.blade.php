@extends('layout')
@section('content')


<div class="container text-center">
    <div class="text-center mb-4">
      <img src="/img/main.jfif" alt="logo bootstrap" width="200">
      <h2 class="mb-3" style="font-weight: 600;">Клиенты</h2>
    </div>
    
    <a href="/add_client" class="btn btn-lg btn-danger btn-block w-100 mb-1" type="submit" name="come">Добавить</a>

    <div class="row mx-1">

      <div class="col d-flex flex-column bg-light rounded-3 shadow-sm pt-2 pb-1 px-3 mt-3">
        <div class="d-flex my-1">
          <span class="me-auto">Магомедов</span>
          <span class="mx-2">Рамазан</span>
          <span class="ms-auto">Хизриевич</span>
        </div>
        <div class="d-flex mb-1">
          <div>16-10-2004</div>
          <div class="ms-auto">2022-02-17 12:30:17</div>              
        </div>
        <div class="d-flex gap-2 mt-1">
          <a href="#" class="btn btn-warning w-50">Редактировать</a>
          <a href="#" class="btn btn-danger w-50">Удалить</a>
        </div>
      </div>

      <div class="col d-flex flex-column bg-light rounded-3 shadow-sm pt-2 pb-1 px-3 mt-3">
        <div class="d-flex my-1">
          <span class="me-auto">Адаев</span>
          <span class="mx-2">Азиз</span>
          <span class="ms-auto">Валуевич</span>
        </div>
        <div class="d-flex mb-1">
          <div>20-12-1998</div>
          <div class="ms-auto">2022-01-17 12:23:22</div>              
        </div>
        <div class="d-flex gap-2 mt-1">
          <a href="#" class="btn btn-warning w-50">Редактировать</a>
          <a href="#" class="btn btn-danger w-50">Удалить</a>
        </div>
      </div>

    </div>
    
</div>

@endsection 