<?php

namespace Pratiksh\LaraNepal\Models;

use App\Model\District;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];

    // Province has many districts relation 

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
