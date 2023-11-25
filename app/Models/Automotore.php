<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Automotore
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $patente
 * @property $tipo
 * @property $titulares_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Infraccione[] $infracciones
 * @property Titulare $titulare
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Automotore extends Model
{
    
    static $rules = [
		'marca' => 'required',
		'modelo' => 'required',
		'patente' => 'required',
		'tipo' => 'required',
		'titulares_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','modelo','patente','tipo','titulares_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function infracciones()
    {
        return $this->hasMany('App\Models\Infraccione', 'automotores_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function titulare()
    {
        return $this->hasOne('App\Models\Titulare', 'id', 'titulares_id');
    }
    

}
