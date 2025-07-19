<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Itemset extends Authenticatable
{
    protected $connection = 'game';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'itemsets';

    protected $primaryKey = 'ID';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function items()
    {
        return $this->hasMany('App\Models\Item', 'panoplie', 'ID');
    }
}