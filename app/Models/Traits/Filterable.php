<?php

namespace App\Models\Traits;

use App\Http\Filters\FilterInterface;
use App\Http\Requests\Post\FilterRequest;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter(Builder $builder, FilterInterface $filters)
    {
        $filters->apply($builder);
        return $builder;
    }
}
