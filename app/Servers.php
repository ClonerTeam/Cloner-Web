<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    protected $table = "servers";

    protected $fillable = [
        'name', 'ip', 'key'
    ];
}
