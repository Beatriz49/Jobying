<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Empresas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path',
        'horario_inicio',
        'horario_fim',
        'data',
        'image',
        'cargo',
        'local',
        'beneficios',
        'perfilesperado',
    ];
}
