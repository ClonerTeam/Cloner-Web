<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tokens extends Model
{
    protected $table = "tokens";

    protected $fillable = [
        'token'
    ];

}
