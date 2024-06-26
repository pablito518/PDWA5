<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furniture;

class XmlController extends Controller
{
    //
    public function createXml(){
        $data = Furniture::all();
        //print_r($data);


        return response()->view('data-xml', ['records' => $data])->header('Content-Type', 'application/xml');
    }
}
