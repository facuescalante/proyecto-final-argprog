<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Infraccione
 *
 * @property $id
 * @property $fecha
 * @property $descripcion
 * @property $automotores_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Automotore $automotore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Infraccione extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'descripcion' => 'required',
		'automotores_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','descripcion','automotores_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function automotore()
    {
        return $this->hasOne('App\Models\Automotore', 'id', 'automotores_id');
    }
    

}
