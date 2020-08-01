<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'contract_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'contract_id' => 'integer',
    ];
    public function cooperation()
    {
        return $this->belongsTo(\App\Cooperation::class);
    }

    public function actiondescription()
    {
        return $this->belongsTo(\App\ActionDescription::class);
    }

    public function action()
    {
        return $this->belongsTo(\App\Action::class);
    }

    public function contract()
    {
        return $this->belongsTo(\App\Contract::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
