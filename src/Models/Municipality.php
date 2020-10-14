<?php

namespace Pratiksh\LaraNepal\Models;

use App\Model\Client;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $guarded = [];

    // Municipality Belongs To District Relation

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    // Municipality Has Many Clients Relation

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
