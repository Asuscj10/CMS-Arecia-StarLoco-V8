<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Item extends Authenticatable
{
    protected $connection = 'game';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_template';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function itemset()
    {
        return $this->hasOne('App\Models\Itemset', 'ID', 'panoplie');
    }
}