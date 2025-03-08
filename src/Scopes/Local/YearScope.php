<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait to provide various year-based filtering scopes.
 */
trait YearScope
{
    /**
     * Scope a query to filter records by a specific year.
     */
    public function scopeYear(Builder $query, string $column, int $year): void
    {
        $query->whereYear($column, '=', $year);
    }

    /**
     * Scope a query to filter records from the current year.
     */
    public function scopeCurrentYear(Builder $query, string $column): void
    {
        $query->whereYear($column, '=', now()->year);
    }

    /**
     * Scope a query to filter records from the last year.
     */
    public function scopeLastYear(Builder $query, string $column): void
    {
        $query->whereYear($column, '=', now()->subYear()->year);
    }

    /**
     * Scope a query to filter records from the next year.
     */
    public function scopeNextYear(Builder $query, string $column): void
    {
        $query->whereYear($column, '=', now()->addYear()->year);
    }

    /**
     * Scope a query to filter records within a specific year range.
     */
    public function scopeYearRange(Builder $query, string $column, int $startYear, int $endYear): void
    {
        $query->whereYear($column, '>=', $startYear)
            ->whereYear($column, '<=', $endYear);
    }

    /**
     * Scope a query to filter records based on a given year condition.
     */
    public function scopeYearCondition(Builder $query, string $column, string $condition, int $year): void
    {
        $query->whereYear($column, $condition, $year);
    }
}
