<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scope for filtering records based on verification status.
 */
trait VerificationScope
{
    /**
     * Scope a query to only include verified records.
     */
    public function scopeVerified(Builder $query): void
    {
        $query->where('is_verified', true);
    }

    /**
     * Scope a query to only include unverified records.
     */
    public function scopeUnverified(Builder $query): void
    {
        $query->where('is_verified', false);
    }
}
