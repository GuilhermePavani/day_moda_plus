<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\Produto;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        $estoques = Estoque::with('produto')->get();
        return view('estoques.index', compact('estoques'));
    }

    public function create()
    {
        $produtos = Produto::all();
        return view('estoques.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:0',
            'data_entrada' => 'required|date',
        ]);

        Estoque::create($request->all());

        return redirect()->route('estoques.index')->with('success', 'Estoque registrado!');
    }
}
