<?php

namespace Slokee\Supporter\Scopes\Local;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

/**
 * Scopes for filtering records based on date conditions.
 */
trait DateScope
{
    /**
     * Filter records where the given column matches the specified date.
     */
    public function scopeDate(Builder $query, string $column, string $date): void
    {
        $query->whereDate($column, '=', Carbon::parse($date)->toDateString());
    }

    /**
     * Filter records where the given column is on or after the specified date.
     */
    public function scopeDateAfterOrEqual(Builder $query, string $column, string $date): void
    {
        $query->whereDate($column, '>=', Carbon::parse($date)->toDateString());
    }

    /**
     * Filter records where the given column is on or before the specified date.
     */
    public function scopeDateBeforeOrEqual(Builder $query, string $column, string $date): void
    {
        $query->whereDate($column, '<=', Carbon::parse($date)->toDateString());
    }

    /**
     * Filter records where the given column is between the specified start and end dates.
     */
    public function scopeDateBetween(Builder $query, string $column, string $startDate, string $endDate): void
    {
        $query->whereBetween($column, [Carbon::parse($startDate), Carbon::parse($endDate)]);
    }
}
