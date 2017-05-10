<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table='tasks';
    protected $fillable = [
        'name',
        'data1',
        'data2',
        'data3',
        'data4',
    ];
}
