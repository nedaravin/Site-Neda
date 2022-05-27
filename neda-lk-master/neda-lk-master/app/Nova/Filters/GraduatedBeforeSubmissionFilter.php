<?php

namespace App\Nova\Filters;

use App\Models\Government\District;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\BooleanFilter;
use Laravel\Nova\Filters\Filter;

class GraduatedBeforeSubmissionFilter extends BooleanFilter
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
    public $name = 'Graduation Date';

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
        if($value === 'b_2021'){
            return $query->whereDate('education_date_of_graduation', '<',  Carbon::now());
        }

        if($value === 'a_2021'){
            return $query->whereDate('education_date_of_graduation', '>', Carbon::now());
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
            'Before 2021' => 'b_2021',
            'After 2021' => 'a_2021'
        ];
    }
}
