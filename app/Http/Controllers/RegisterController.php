<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furniture;

class RegisterController extends Controller
{
    public function save(Request $request){
        $request->validate([
            "brand" => "required|min:3|max:30",
            "material" => "required|min:3|max:20",
            "color" => "required|min:3|max:20",
            "style" => "required|min:3|max:10",
            "price" => "required|decimal:2",
        ]);
        $furniture = new Furniture();
        $furniture->fill($request->all());
        $furniture->save();

        return view('registered');
        dd($request);
    }
}
