<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scope for filtering active and inactive records.
 */
trait ActiveScope
{
    /**
     * Filter query to include only active records.
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('is_active', true);
    }

    /**
     * Filter query to include only inactive records.
     */
    public function scopeInActive(Builder $query): void
    {
        $query->where('is_active', false);
    }
}
