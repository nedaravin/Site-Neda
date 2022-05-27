<?php

namespace App\Nova\Filters;

use App\Models\Auth\User;
use App\Models\Government\District;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class DevelopmentOfficerFilter extends Filter
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
    public $name = 'Development Officer';

    /**
     * Apply the filter to the given query.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        return $query->where('user_id', $value);
    }

    // Age less than 45
    // Date of graduation

    /**
     * Get the filter's available options.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function options(Request $request)
    {
        $users = (new User())
            ->whereHas('roles', function ($q) {
                $q->where('name', 'Development Officer');
            })->get();

        $user_list = [];

        foreach($users as $user){
            if($user->divisional_secretariat_model){
                $user_list[str_replace('.', ' ', $user->name).' - ('.$user->divisional_secretariat_model->title_en.')'] = $user->id;
            }
        }
//        dd($users);

        return $user_list;
    }
}
