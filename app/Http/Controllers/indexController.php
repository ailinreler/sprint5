<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function goToRegister(){
      return view('register');
    }

    public function goToLogin()
    {
      return view('login');
    }

    public function goToProducts()
    {
      return view('products');
    }

    public function goToFaq()
    {
      return view('faq');
    }

    public function goToContact()
    {
      return view('contacto');
    }
}
