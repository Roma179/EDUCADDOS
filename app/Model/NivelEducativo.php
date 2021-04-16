<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NivelEducativo extends Model
{
    protected $table = 'nivel_educativo';

    protected $fillable = [
        'nombre',
        'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamp = true;
}
