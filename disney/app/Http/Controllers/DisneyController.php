<?php

namespace App\Http\Controllers;

use App\Models\Disney;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisneyController extends Controller
{
    //

    public function index(){
            $all=Disney::all();
            return view('Index', compact('all'));
        }
    public function show($id){
        $find=Disney::find($id);
        return view('Show', compact('find'));
    }
    public function store(){
        return view('Create');

    }
    public function create(){
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
    }

    public function edit($id){
        $find=Disney::find($id);
        return view('Edit', compact('find'));
    }

    public function update($id){
        $validate = request()->validate([
            'animal_name' => 'required',
            'animal_price' => 'integer',
            'animal_date' => 'required',
        ]);
        $update =Disney::find($id);
        $update -> name = request('animal_name');
        $update -> price = request('animal_price');
        $update -> description = request('animal_description');
        $update -> datenaissance = request('animal_date');
        $update -> image = request('animal_image');
        $update->save();
        return redirect('/disneys/'.$update->id);
    }

    public function destroy($id){
        $find=Disney::find($id);
        $find->delete();
        return redirect('/disneys');
    }
}
