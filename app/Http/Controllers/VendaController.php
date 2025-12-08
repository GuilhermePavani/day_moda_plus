<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        return view('vendas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'valor' => 'required|numeric',
            'data'  => 'required|date',
        ]);

        Venda::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Venda cadastrada!');
    }
}
