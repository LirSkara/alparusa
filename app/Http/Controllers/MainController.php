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

    public function about_client($id){
        $client = ClientsModel::find($id);
        return view('about_client', ['client' => $client]);
    }

    public function add_client_post(Request $data){
        $valid = $data->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'fathername' => ['required'],
            'data' => ['required'],
            'file' => ['required']
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

    public function delete_client($id){
        ClientsModel::find($id)->delete();
        return redirect()->route('home');
    }

    public function edit($id){
        $client = ClientsModel::find($id);
        return view('edit', ['client' => $client]);
    }

    public function edit_client($id, Request $data){
        $valid = $data->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'fathername' => ['required'],
            'data' => ['required'],
            'file' => ['required']
        ]);

        $client = ClientsModel::find($id);
        $client->firstname = $data->input('firstname');
        $client->lastname = $data->input('lastname');
        $client->fathername = $data->input('fathername');
        $client->data = $data->input('data');

         $file = $data->file('file');
         $upload_folder = 'public/file'; //Создается автоматически
         $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
         Storage::putFileAs($upload_folder, $file, $filename);
 
         $client->file = $filename;
         $client->save();

        return redirect()->route('about_client', $id);
    }

}
