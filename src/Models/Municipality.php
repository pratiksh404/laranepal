<?php

namespace Pratiksh\LaraNepal\Models;


use Illuminate\Database\Eloquent\Model;
use Pratiksh\LaraNepal\Models\District;

class Municipality extends Model
{
    protected $guarded = [];

    public $incrementing = false;
    public $keyType = 'string';

    // Municipality Belongs To District Relation

    public function district()
    {
        return $this->belongsTo(District::class, 'district_name');
    }
}
