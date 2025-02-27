<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    
    function viewIndexprincipal(){
        return view("Index.indexPrincipal");
    }
}
