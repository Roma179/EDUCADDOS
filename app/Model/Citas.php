<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';

    protected $fillable = [
        'nivel_educativo_id',
        'rfc',
        'start',
        'end',
        'title',       
        'status',
        'asistio',
        'penalizado',
        'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamp = true;
}
