<?php

use App\Models\Disney;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $all=App\Models\Disney::all();
    return view('Index', compact('all'));
});

Route::get('/create', function () {
    return view('Create');
});

Route::get('/{id}', function ($id) {
    $find=App\Models\Disney::find($id);
    return view('Show', compact('find'));
});

Route::post('/',function() {
    $validate = request()->validate([
        'animal_name' => 'required',
        'animal_price' => 'integer',
        'animal_description' => 'required',
        'animal_date' => 'required',
    ]);
    $animal = new Disney();
    $animal -> name = request('animal_name');
    $animal -> price = request('animal_price');
    $animal -> description = request('animal_description');
    $animal -> datenaissance = request('animal_date');
    $animal -> image = request('animal_image');
    $animal -> save();

    return redirect('/'.$animal->id);
});
