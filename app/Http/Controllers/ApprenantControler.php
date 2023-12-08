<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantControler extends Controller
{
    public function index(){
       // return Apprenant::all();
       $liste = Apprenant::all();
       return view('list_apprenants',compact('liste'));
    }
}
