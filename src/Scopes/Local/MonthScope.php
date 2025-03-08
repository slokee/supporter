<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scopes for filtering records based on month and year conditions.
 */
trait MonthScope
{
    /**
     * Filter records where the given column matches the specified month.
     */
    public function scopeMonth(Builder $query, string $column, int $month): void
    {
        $query->whereMonth($column, $month);
    }

    /**
     * Filter records where the given column matches the specified year and month.
     */
    public function scopeYearMonth(Builder $query, string $column, int $year, int $month): void
    {
        $query->whereYear($column, $year)->whereMonth($column, $month);
    }
    
    /**
     * Filter records where the given column falls in the current month.
     */
    public function scopeCurrentMonth(Builder $query, string $column): void
    {
        $query->whereYear($column, now()->year)->whereMonth($column, now()->month);
    }

    /**
     * Filter records where the given column falls in the last month.
     */
    public function scopeLastMonth(Builder $query, string $column): void
    {
        $query->whereYear($column, now()->subMonth()->year)->whereMonth($column, now()->subMonth()->month);
    }
}
