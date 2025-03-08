<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;

/**
 * Scope for filtering archived and unarchived records.
 */
trait ArchivedScope
{
    /**
     * Filter query to include only archived records.
     */
    public function scopeArchived(Builder $query): void
    {
        $query->where('is_archived', true);
    }

    /**
     * Filter query to include only unarchived records.
     */
    public function scopeUnarchived(Builder $query): void
    {
        $query->where('is_archived', false);
    }
}
