<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organizadores';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'users_dni',
        'eventos_id'
    ];
}
