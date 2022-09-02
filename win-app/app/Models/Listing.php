<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Listing extends Model
{
    use Notifiable;
    public function country()
    {
        return $this->hasOne('App\Country');
    }
    public function category()
    {
        return $this->hasOne('App\Category');
    }
}
