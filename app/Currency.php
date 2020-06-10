<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'name',
        'value',
        'date'
    ];

    public function scopeDate($query, $date): Builder
    {
        return $query->where('date', $date);
    }

    public function scopeName($query, $name): Builder
    {
        return $query->where('name', $name);
    }
}
