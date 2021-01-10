<?php

namespace App\Services;

use App\Region;

class Regions
{

    public function get () {
        $regions = Region::get();

        $regionsArray[''] = 'Seleccione una region';
        foreach ($regions as $region) {
            $regionsArray[$region->id] = $region->name;
        }

        return $regionsArray;
    }
}