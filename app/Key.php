<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $table = 'key';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'key'
    ];


}
