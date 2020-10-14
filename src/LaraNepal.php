<?php

namespace Pratiksh\LaraNepal;

use Illuminate\Support\Facades\Cache;
use Pratiksh\LaraNepal\Models\District;
use Pratiksh\LaraNepal\Models\Province;
use Pratiksh\LaraNepal\Models\Municipality;

class LaraNepal
{
    // Retrive Nepal's Provinces
    public function provinces()
    {
        $provinces = config('laranepal.caching', true)
            ? (Cache::has('provinces') ? Cache::get('provinces') : Province::with('districts')->get())
            : Province::with('districts')->get();
        return $provinces;
    }

    // Retrives Nepal's Districts
    public function districts()
    {
        $districts = config('laranepal.caching', true)
            ? (Cache::has('districts') ? Cache::get('districts') : District::with('municipalities')->get())
            : District::with('municipalities')->get();
        return $districts;
    }

    // Retrives Nepal's Municipalities
    public function municipalities()
    {
        $municipalities = config('laranepal.caching', true)
            ? (Cache::has('municipalities') ? Cache::get('municipalities') : Municipality::all())
            : Municipality::all();
        return $municipalities;
    }
}
