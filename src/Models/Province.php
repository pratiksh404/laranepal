<?php

namespace Pratiksh\LaraNepal\Models;

use Illuminate\Database\Eloquent\Model;
use Pratiksh\LaraNepal\Models\District;

class Province extends Model
{
    protected $guarded = [];

    // Province has many districts relation 

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
