<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sample_data extends Model
{
	protected $table='sample_datas';
    protected $fillable = [
        'name', 'address', 'Phone'
    ];
}
