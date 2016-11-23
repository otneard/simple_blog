<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';

    public function getName()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }
}
