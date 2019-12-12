<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelRequest extends Model
{
    protected $table='parcel_requests';
    protected $fillable = [
        'name','email', 'phone', 'address','branchName','where','date','receiversNumber','receiversName'
    ];
}
