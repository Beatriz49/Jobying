<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path',
        'idade',
        'teste',
        'image',
        'procurando',
        'experiencias',
        'skills',

    ];
}
// habilitações