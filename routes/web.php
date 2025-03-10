<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ImageController;
use App\Models\Candidato;
use App\Models\Image;
Route::get('/candidato', function () {
    return view('candidato');
});
Route::get('/candidato/create', function () {
    return view('candidato.create');
});

Route::get('/candidatos', [CandidatoController::class, 'index'])->name('candidatos.index');
Route::get('/candidatos/create', [CandidatoController::class, 'create'])->name('candidatos.create');
Route::get('/candidatos/{id}', [CandidatoController::class, 'show'])->name('candidatos.show');
Route::post('/candidatos', [CandidatoController::class, 'store'])->name('candidatos.store');


Route::post('/candidatos/store', function (Request $request) {
    $request->validate([
        'nome' => 'required',
        'idade' => 'required',
        'skills' => 'required',
        'trabalhos' => 'required',
        'procurando' => 'required',

    ]);
    dd($request->all());
    Candidato::create([
        'nome' => $request->input('nome'),
        'idade' => $request->input('idade'),
        'skills' => $request->input('skills'),
        'experiencias' => $request->input('experiencias'),
        'trabalhos' => $request->input('trabalhos'),
        'procurando' => $request->input('procurando'),
    ]);
    return redirect()->route('candidatos.index');
});

Route::get('/images/create', function () {
    return view('images.create1');
});


Route::get('/images/{id}', function ($id) {
    $image = Image::find($id);
    return view('images.show', ['image' => $image]);
});



Route::get('/images', function () {
    $images = Image::all();
    return view('images.index', ['images' => $images]);
});


Route::get('/', function () {
    return view('welcome');
});
Route::resource('candidatos', CandidatoController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
});


Route::get('/teste', function () {
    return view('teste');
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
