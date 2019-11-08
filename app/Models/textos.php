<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class textos extends Model
{
    use SoftDeletes;

    const tabla = 'textos';
    protected $table = Textos::tabla;

    protected $dates = ['deleted_at'];

	protected $fillable = [
        'texto',
        'textarea',
        'email'
    ];
}
