<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuildData extends Model
{
    protected $table = 'guild_data';

    protected $fillable = [
        'uuid', 'userId', 'data', 'used', 'guildId'
    ];
}
