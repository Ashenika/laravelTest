<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function sender() {
        return $this->belongsTo('App\User', 'sender_id', 'id');
    }
}
