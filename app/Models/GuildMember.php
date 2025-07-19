<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuildMember extends Model
{
    protected $connection = 'game';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guild_members';

    protected $primaryKey = 'guid';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}