<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_staffs';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function account()
    {
        return $this->hasOne('App\Models\Account', 'guid', 'account_id');
    }
}