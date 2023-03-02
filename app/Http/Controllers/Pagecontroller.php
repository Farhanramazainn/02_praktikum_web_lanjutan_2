<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "2141720209 Farhan Ramazain TI2H";
    }
    public function articles($id){
        return "Halaman Articles dengan ID ". $id;
    }
}
