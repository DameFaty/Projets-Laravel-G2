<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function formations(){
       // return Formation::all();
       $list = Formation::all();
       return view('list_formation',['liste' => $list]);
    }
}
