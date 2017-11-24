<?php

namespace App\Http\Controllers;

use function view;

class WelcomeController extends Controller
{

  public function index() {
      return view('welcome');
  }

}

