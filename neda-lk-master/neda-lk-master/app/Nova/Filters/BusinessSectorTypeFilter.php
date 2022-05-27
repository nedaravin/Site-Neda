<?php

namespace App\Nova\Filters;

use App\Models\Government\District;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class BusinessSectorTypeFilter extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * The displayable name of the filter.
     *
     * @var string
     */
    public $name = 'Sector Type';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        if($value === 'primary'){
            return $query->whereNull('parent_id');
        }

        if($value === 'secondary'){
            return $query->whereNotNull('parent_id');
        }
    }

    // Age less than 45
    // Date of graduation

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Primary' => 'primary',
            'Secondary' => 'secondary'
        ];
    }
}
