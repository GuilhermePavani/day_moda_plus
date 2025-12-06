<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    // Salva o cliente no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:11',
            'tamanho_preferido' => 'nullable|string|max:20'
            ]);

            Cliente::create($request->all());

            return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:11',
            'telefone' => 'required|string',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }
}
