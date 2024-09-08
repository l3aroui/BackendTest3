<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SideBar extends Controller
{
    public function SideBar(){
        return Inertia::render('');
    } 
}
