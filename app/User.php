<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
