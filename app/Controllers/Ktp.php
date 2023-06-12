<?php
namespace App\Controllers;
class Ktp extends BaseController
{
    public function index()
    {
        return view('ktp');
    }
    public function ktm()
    {
        return view('ktm');
    }
}