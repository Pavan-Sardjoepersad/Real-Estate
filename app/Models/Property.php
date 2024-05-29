<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Scope query to filter by type
    public function scopeType($query, $type){
        if ($type) {
            return $query->where('type', $type);
        }

        return $query;
    }

    // Scope query to filter by price range
    public function scopePrice($query, $priceRange)
    {
        if (isset($priceRange['min'])) {
            $query->where('price', '>=', $priceRange['min']);
        }

        if (isset($priceRange['max'])) {
            $query->where('price', '<=', $priceRange['max']);
        }

        return $query;
    }

    public function scopeCity($query, $city){
        if($city){
            return $query->where('city',$city);
        }

        return $query;
    }


}
