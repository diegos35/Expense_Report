<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('test', [
            'title' =>'Curso laravel Platzi del Dashboard'
        ]);
    }
}
