<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Candidato extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'idade',
        'path',
        'skills',
        'image',
        'experiencias',
        'procurando',
        'trabalhos',
    ];
}
