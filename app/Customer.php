<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'anrede',
        'name',
        'vorname',
        'telefonnummer',
        'telefon_mobil',
        'email',
        'strasse',
        'hausnummer',
        'platz',
        'ort',
        'geburtsdatum',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function processes()
    {
        return $this->hasMany(\App\Process::class);
    }

    public function contracts()
    {
        return $this->hasMany(\App\Contract::class);
    }
}
