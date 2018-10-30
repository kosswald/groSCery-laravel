<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'pivot',
    ];

    /**
     * Get the group for the item
     */
    public function group() {
        return $this->belongsTo('App\Group');
    }

    /**
     * Get the users for the item
     */
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
