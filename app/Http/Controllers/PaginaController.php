<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function sobre()
    {
        return view('pages.sobre');
    }

    public function contato()
    {
        return view('pages.contato');
    }
}
