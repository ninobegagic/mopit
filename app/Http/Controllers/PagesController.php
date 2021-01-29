<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function cleaner(){
        return view('pages.cleaner');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function list(){
        return view('pages.list');
    }
}
