<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guilds';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function members()
    {
        return $this->hasMany('App\Models\GuildMember', 'guild', 'id');
    }
}