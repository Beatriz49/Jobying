<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;


class CandidatoController extends Controller {

    public function index() {
        $candidatos = Candidato::all();
        return view('candidatos.index', compact('candidatos'));
    }

    public function create() {
        return view('candidatos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
            'foto' => 'nullable|url',
            'skills' => 'required',
            'experiencias' => 'required',
            'trabalhos' => 'required',
            'procurando' => 'required',
        ]);

        Candidato::create($request->all());

        return redirect()->route('candidatos.index')->with('success', 'Candidato adicionado com sucesso!');
    }

    public function show(Candidato $candidato) {
        return view('candidatos.show', compact('candidato'));
    }

}
