<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Titulare
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $dni
 * @property $edad
 * @property $nrolicencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Automotore[] $automotores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Titulare extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'dni' => 'required',
		'edad' => 'required',
		'nrolicencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','dni','edad','nrolicencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function automotores()
    {
        return $this->hasMany('App\Models\Automotore', 'titulares_id', 'id');
    }
    

}
