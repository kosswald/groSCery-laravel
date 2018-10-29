<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Get the users of a group
     */
    public function users() {
        return $this->hasMany('App\User');
    }

    /**
     * Get the items of a group
     */
    public function items() {
        return $this->hasMany('App\Item');
    }


}
