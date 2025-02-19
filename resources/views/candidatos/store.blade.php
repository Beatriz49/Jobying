<?php
public function store(Request $request) {
    $request->validate([
        'nome' => 'required|string|max:255',
        'idade' => 'required|integer',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'skills' => 'required|string',
        'experiencias' => 'required|string',
        'trabalhos' => 'required|string',
        'procurando' => 'required|string',
    ]);

    // Salvar a imagem na pasta "storage/app/public/candidatos"
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('candidatos', 'public');
    } else {
        $fotoPath = null;
    }

    // Criar candidato
    Candidato::create([
        'nome' => $request->nome,
        'idade' => $request->idade,
        'foto' => $fotoPath,
        'skills' => $request->skills,
        'experiencias' => $request->experiencias,
        'trabalhos' => $request->trabalhos,
        'procurando' => $request->procurando,
    ]);

    return redirect()->route('candidatos.index')->with('success', 'Candidato adicionado com sucesso!');
};
>
