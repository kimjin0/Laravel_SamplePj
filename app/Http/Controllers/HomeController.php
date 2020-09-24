<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $books = [
            'Herry Potter',
            'Laravel',
            '<script>alert("^^");</script>'
        ];
        // resources/views/welcome.blade.php를 찾음
        return view('welcome', [
            'books'=>$books
        ]);        
    }
    
    public function hello(){
        return view('hello');
    }

    public function contact(){
        return view('contact');
    }



}
