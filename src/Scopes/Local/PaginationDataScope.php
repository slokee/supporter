<?php

namespace Slokee\Supporter\Scopes\Local;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/**
 * Scope for paginating model queries based on request parameters.
 */
trait PaginationDataScope
{
    /**
     * Paginate the query results based on request parameters.
     *
     * @param  Request|null  $request  Optional request instance to retrieve pagination parameters.
     * @return LengthAwarePaginator|Collection  Paginated result if parameters exist, otherwise a collection.
     */
    public function scopePaginateData(Builder $query, ?Request $request = null)
    {
        if ($request && ($request->has('page') || $request->has('perPage'))) {
            $pageNumber = $request->input('page', 1);
            $pageSize = $request->input('perPage', config('supporter.default_page_size', 25));
            return $query->paginate($pageSize, ['*'], 'page', $pageNumber);
        }

        return $query->get();
    }
}
