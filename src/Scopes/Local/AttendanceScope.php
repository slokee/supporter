<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scope for filtering attendance records by status.
 */
trait AttendanceScope
{
    /**
     * Filter query to include only records with 'Present' status.
     */
    public function scopePresent(Builder $query): void
    {
        $query->where('status', 'Present');
    }

    /**
     * Filter query to include only records with 'Absent' status.
     */
    public function scopeAbsent(Builder $query): void
    {
        $query->where('status', 'Absent');
    }
}
