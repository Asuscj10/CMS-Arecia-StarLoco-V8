<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screenshot extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_screenshots';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}