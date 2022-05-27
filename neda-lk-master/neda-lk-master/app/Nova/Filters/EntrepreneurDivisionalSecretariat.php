<?php

namespace App\Nova\Filters;

use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class EntrepreneurDivisionalSecretariat extends Filter
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
    public $name = 'Divisional Secretariat';

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
        return $query->where('divisional_secretariat_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return (new DivisionalSecretariat())->orderBy('title_en', 'ASC')->get()->pluck('id', 'title_en');
    }
}
