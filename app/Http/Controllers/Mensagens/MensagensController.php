<?php

namespace App\Http\Controllers\Mensagens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MensagensController extends Controller
{
    public function index()
    {
        return view('mensagens.index');
    }
}
