<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoCambio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tipo_cambio';
    protected $guarded = [];
}
