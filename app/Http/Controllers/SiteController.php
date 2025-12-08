<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class SiteController extends Controller
{
    public function produtos()
    {
        $produtos = Produto::all();
        return view('site.produtos', compact('produtos'));
    }
}
