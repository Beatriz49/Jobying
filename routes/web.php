<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/candidatos', function () {
    return view('pages.candidatos');
});

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
