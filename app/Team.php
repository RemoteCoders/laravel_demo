<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    public function players()
    {
        return $this->hasMany('App\Player', 'team_id', 'id');
    }

}
