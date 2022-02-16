<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientsModel;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function home_page(){
        $clients = new ClientsModel();
        return view('home', ['clients' => $clients->latest()->get()]);
    }

    public function add_client(){
        return view('add_client');
    }

    public function add_client_post(Request $data){
        $valid = $data->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'fathername' => ['required'],
            'data' => ['required'],
            'file' => ['required', 'image']
         ]);
         
        $clients = new ClientsModel();
        $clients->firstname = $data->input('firstname');
        $clients->lastname = $data->input('lastname');
        $clients->fathername = $data->input('fathername');
        $clients->data = $data->input('data');

        // загрузка файла
        $file = $data->file('file');
        $upload_folder = 'public/file'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename);

        $clients->file = $filename;
        $clients->save();

        return redirect()->route('home');
    }

}
