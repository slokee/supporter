<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scope for filtering records based on status.
 */
trait StatusScope
{
    /**
     * Scope a query to only include active records.
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('status', true);
    }

    /**
     * Scope a query to only include inactive records.
     */
    public function scopeInActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
