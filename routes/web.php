<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ImageController;
use App\Models\candidato;
use App\Models\empresas;
use App\Http\Controllers\EmpresasController;
use App\Models\Image;


Route::post('/candidato/store', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
        'teste' => 'required',
        'skills' => 'nullable',
        'procurando' => 'required',
        'experiencias' => 'required',
        'trabalhos' => 'required',
        'idade' => 'required',
    ]);


    $imageName = time() . "." . $request->image->extension();
    $request->image->move(public_path('img'), $imageName);
    Image::create([
        'name' => $request->input('name'),
        'path' => $imageName,
        'teste' => $request->input('teste'),
        'skills' => $request->input('skills'),
        'procurando' => $request->input('procurando'),
        'experiencias' => $request->input('experiencias'),
        'trabalhos' => $request->input('trabalhos'),
        'idade' => $request->input('idade'),
    ]);

    return redirect()->route('candidato.index');
});
Route::get('/candidato/create', function () {
    return view('candidato.create1');
});




Route::get('/candidato/{id}', function ($id) {
    $image = Image::find($id);
    return view('candidato.show', ['image' => $image]);
});



Route::get('/candidato', function () {
    $images = Image::all();
    return view('candidato.index', ['images' => $images]);
});





Route::post('/empresas/store', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
        'horario' => 'required',
        'data' => 'nullable',
        'cargo' => 'required',
        'local' => 'required',
        'beneficios' => 'required',
        'perfilesperado' => 'required',
        'detalhes' => 'required',
    ]);


    $imageName = time() . "." . $request->image->extension();
    $request->image->move(public_path('img2'), $imageName);
    Image::create([
        'name' => $request->input('name'),
        'path' => $imageName,
        'horario' => $request->input('horario'),
        'data' => $request->input('data'),
        'cargo' => $request->input('cargo'),
        'local' => $request->input('local'),
        'beneficio' => $request->input('beneficio'),
        'perfilesperado' => $request->input('perfilesperado'),
        'detalhes' => $request->input('detalhes'),
]);

    return redirect()->route('empresas.index');
});
Route::get('/empresas/create', function () {
    return view('empresas.create1');
});




Route::get('/empresas/{id}', function ($id) {
    $image = Image::find($id);
    return view('empresas.show', ['image' => $image]);
});



Route::get('/empresas', function () {
    $images = Image::all();
    return view('empresas.index', ['images' => $images]);
});


Route::get('/', function () {
    return view('welcome');
});




Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});

// Removed duplicate routes

Route::get('/categories', function () {
    $categories = Category::all();
    return view('categories.index', compact('categories'));
});

Route::get('/categories/create', function () {
    return view('categories.create');
});

Route::post('/categories/store', function (Request $request) {
    $request->validate([
        'name' => 'required|min:3|unique:categories,name',
        'slug' => 'required|unique:categories,slug',
        'image' => 'image',
        'description' => 'min:3'
    ]);

    Category::create([
        'name' => $request->input('name'),
        'slug' => $request->input('slug'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
    ]);
});
