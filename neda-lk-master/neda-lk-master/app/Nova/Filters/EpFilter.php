<?php

namespace App\Nova\Filters;

use App\Models\Government\District;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class EpFilter extends Filter
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
    public $name = 'Job Type';

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
        return $query->where('job_type', $value);
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
            'EP Officer' => 'enterprise_promotion_officer',
            'EP Assistant' => 'enterprise_promotion_assistant'
        ];
    }
}
