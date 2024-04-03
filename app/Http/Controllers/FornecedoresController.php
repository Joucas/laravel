<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedore(){
        return View('site.fornecedores');
    }
}
