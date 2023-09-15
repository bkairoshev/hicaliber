<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    // scopes
    public function scopeFilter(Builder $query, $filters)
    {
        return $query
            ->when(isset($filters['name']), function ($query) use ($filters) {
                $query->where('name', 'like', '%' . $filters['name'] . '%');
            })
            ->when(isset($filters['bedrooms']), function ($query) use ($filters) {
                $query->where('bedrooms', $filters['bedrooms']);
            })
            ->when(isset($filters['bathrooms']), function ($query) use ($filters) {
                $query->where('bathrooms', $filters['bathrooms']);
            })
            ->when(isset($filters['storeys']), function ($query) use ($filters) {
                $query->where('storeys', $filters['storeys']);
            })
            ->when(isset($filters['garages']), function ($query) use ($filters) {
                $query->where('garages', $filters['garages']);
            })
            ->when(isset($filters['price_min']), function ($query) use ($filters) {
                $query->where('price', '>=', $filters['price_min']);
            })
            ->when(isset($filters['price_max']), function ($query) use ($filters) {
                $query->where('price', '<=', $filters['price_max']);
            });
    }
}
