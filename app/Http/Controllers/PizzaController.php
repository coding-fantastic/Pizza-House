<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
      $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
      ];

      // $name = request('name');
      // $age = request('age');
      return view('pizzas', ['pizzas'=> $pizzas] );
    }
  public function show($id){
    return view('details', ['id' => $id] );
  }
}
