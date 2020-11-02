<?php

namespace Pratiksh\LaraNepal\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = [];

    public $incrementing = false;
    public $keyType = 'string';
    protected $primaryKey = 'name';

    // District Belongs To Relationship
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id')->orderBy('province_name', 'ASC');
    }

    // District Has Many Municipalities Relation
    public function municipalities()
    {
        return $this->hasMany(Municipality::class, 'district_name');
    }
}
