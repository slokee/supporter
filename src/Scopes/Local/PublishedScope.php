<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scope for filtering published and unpublished records.
 */
trait PublishedScope
{
    /**
     * Scope a query to only include published records.
     */
    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true);
    }

    /**
     * Scope a query to only include unpublished records.
     */
    public function scopeUnpublished(Builder $query): void
    {
        $query->where('is_published', false);
    }
}
