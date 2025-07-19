<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'players';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function account()
    {
        return $this->hasOne('App\Models\Account', 'guid', 'account');
    }

    public function member()
    {
        return $this->hasOne('App\Model\GuildMember', 'guid', 'id');
    }
}