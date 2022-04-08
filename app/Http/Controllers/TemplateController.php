<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;


class TemplateController extends Controller
{

    public function index($pagename)
    {
        return view('template.'.$pagename.'.index')->with('pagename', $pagename);
    }  
    
}