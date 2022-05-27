<?php

namespace App\Nova\Filters;

use App\Models\Government\District;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class AgeFilter extends Filter
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
    public $name = 'Age Range';

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
        if($value === 'gt_45'){
            return $query->whereDate('birthday', '<', Carbon::now()->subYears(45));
        }

        if($value === 'lt_45'){
            return $query->whereDate('birthday', '>', Carbon::now()->subYears(45));
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
            'Greater than 45' => 'gt_45',
            'Less than 45' => 'lt_45'
        ];
    }
}
