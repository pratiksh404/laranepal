<?php

namespace Pratiksh\LaraNepal\Models;

use Illuminate\Database\Eloquent\Model;

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
