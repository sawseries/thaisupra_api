<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affsub24afd;

class affsub24afdController extends Controller
{
    public function index()
    {
         $affsub24afd = affsub24afd::all();
         return response()->json(['name' => 'index', 'projects' => $affsub24afd]);
    }
    
    
    
}
