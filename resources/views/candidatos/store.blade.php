<?php
    public function store(Request $request) {
    $request->validate([
        'nome' => 'required|string|max:255',
        'idade' => 'required|integer',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Permite upload de imagens
        'skills' => 'required|string',
        'experiencias' => 'required|string',
        'trabalhos' => 'required|string',
        'procurando' => 'required|string',
    ]);

    // Salvar a imagem no diretório "storage/app/public/fotos"
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('fotos', 'public');
    } else {
        $fotoPath = null; // Caso não envie foto
    }

    // Criar o candidato no banco de dados
    Candidato::create([
        'nome' => $request->nome,
        'idade' => $request->idade,
        'foto' => $fotoPath, // Salva o caminho da imagem no banco
        'skills' => $request->skills,
        'experiencias' => $request->experiencias,
        'trabalhos' => $request->trabalhos,
        'procurando' => $request->procurando,
    ]);

    return redirect()->route('candidatos.index')->with('success', 'Candidato adicionado com sucesso!');
}
>
