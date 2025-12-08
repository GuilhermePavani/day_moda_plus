<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class DashboardController extends Controller
{
    public function index()
    {
        $vendasSemana = Venda::selectRaw('DAYNAME(created_at) as dia, SUM(valor) as total')
            ->groupBy('dia')
            ->get();

        $vendasMes = Venda::selectRaw('MONTH(created_at) as mes, SUM(valor) as total')
            ->groupBy('mes')
            ->get();

        return view('dashboard.index', compact('vendasSemana', 'vendasMes'));
    }

}
