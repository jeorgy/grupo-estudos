<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrimonio;
use Illuminate\Support\Facades\Gate;

class PatrimonioController extends Controller
{
    public function index()
    {
        $this->authorize('ver_patrimonios');
        // if (Gate::denies('adicionar_patrimonios')) {
        //     return 'Você não pode!';
        // }
        $patrimonios = Patrimonio::all();
        return view('patrimonios.index', ['patrimonios' => $patrimonios]);
    }

    public function create()
    {
        return view('patrimonios.create');
    }
}
