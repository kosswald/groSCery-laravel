<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
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
