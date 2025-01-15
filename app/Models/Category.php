<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Factories\HasFactory
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'image',
    ];

    protected $casts = [
        'image' => 'string',
    ];
    public function getImageAttribute($value)
    {
        return url('storage/' . $value);
    }
}
