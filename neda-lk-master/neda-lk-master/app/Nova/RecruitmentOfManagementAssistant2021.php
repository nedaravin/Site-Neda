<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use App\Models\Forms\RecruitmentOfManagementAssistant2021 as RecruitmentOfManagementAssistant2021Model;
use App\Nova\Filters\AgeFilter;
use App\Nova\Filters\EpFilter;
use Carbon\Carbon;
use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use JoshMoreno\Html\Html;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use NrmlCo\NovaBigFilter\NovaBigFilter;

/**
 * Class RecruitmentOfManagementAssistant2021
 * @package App\Nova
 */
class RecruitmentOfManagementAssistant2021 extends Resource
{
    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Forms & Surveys';

    /**
     * @var string
     */
    public static $model = RecruitmentOfManagementAssistant2021Model::class;

    /**
     * @var string
     */
    public static $title = 'full_name';

    /**
     * @var string[]
     */
    public static $search = [
        'id',
        'full_name',
        'email',
        'telephone'
    ];

    /**
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Full Name', 'full_name')->sortable(),
            Text::make('Name with initials', 'name_with_initials')->hideFromIndex(),
            Text::make('Name in different language', 'name_in_different_language')->hideFromIndex(),
            Text::make('Permanent Address', 'permanent_address')->hideFromIndex(),
            Text::make('Gender', 'gender')->sortable(),
            Text::make('Race', 'race'),
            Text::make('NIC', 'nic'),
            Date::make('Birthday', 'birthday')->sortable(),
            Text::make('Age At Closing', 'age_at_closing')->hideFromIndex(),
            Text::make('Telephone number', 'telephone')->hideFromIndex(),
            Text::make('Email', 'email')->hideFromIndex(),

            Html::make('Educational Qualifications Ordinary Level')
                ->html(function() {
                    if($this->educational_qualifications_ol && is_array($this->educational_qualifications_ol)){
                        $results = $this->educational_qualifications_ol;

                        $subjects = '<table class="table table-tight"><thead><th>Subject</th><th>Grade</th></thead>';
                        foreach (range(1, 9) as $grade){
                            $subjects .= '<tr><td>'. $results['subject_'.$grade] .'</td> <td>'. $results['grade_'.$grade] .'</td></tr>';
                        }
                        $subjects .= '</table>';

                        return '<div class="px-8 py-6 border-b border-40">
                                    <h4 class="mb-2">Year - '.$results["year"].'</h4>
                                    <h4 class="mb-2">Index No - '.$results["index_no"].'</h4>
                                    '.$subjects.'
                                </div>';
                    }
                    return '';

                })->hideFromIndex(),

            Html::make('Educational Qualifications Advance Level')
                ->html(function() {
                    if($this->educational_qualifications_al && is_array($this->educational_qualifications_al)){
                        $results = $this->educational_qualifications_al;

                        $subjects = '<table class="table table-tight"><thead><th>Subject</th><th>Grade</th></thead>';
                        foreach (range(1, 4) as $grade){
                            $subjects .= '<tr><td>'. $results['subject_'.$grade] .'</td> <td>'. $results['grade_'.$grade] .'</td></tr>';
                        }
                        $subjects .= '</table>';

                        return '<div class="px-8 py-6 border-b border-40">
                                    <h4 class="mb-2">Year - '.$results["year"].'</h4>
                                    <h4 class="mb-2">Index No - '.$results["index_no"].'</h4>
                                    '.$subjects.'
                                </div>';
                    }
                    return '';

                })->hideFromIndex(),

            Text::make('Found guilty by court of law', 'found_guilty_by_court_of_law')->hideFromIndex(),
            Text::make('Found guilty by court of law details', 'found_guilty_by_court_of_law_details')->hideFromIndex(),
            Text::make('Holding a post in the public service', 'holding_a_post_in_the_public_service')->hideFromIndex(),
            Text::make('Holding a post in the public service details', 'holding_a_post_in_the_public_service_details')->hideFromIndex(),
            Text::make('Dismissed or removed from public service', 'dismissed_or_removed_from_public_service')->hideFromIndex(),

            Images::make('Profile Picture', 'profile_picture'),
            Files::make('Qualifications', 'qualifications')->hideFromIndex(),
            Files::make('Letter', 'letters')->hideFromIndex(),

        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            (new NovaBigFilter())
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new AgeFilter()
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }


//    public static function indexQuery(NovaRequest $request, $query)
//    {
//        return $query
//            ->whereDate('birthday', '>', Carbon::now()->subYears());
//    }

    /**
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new DownloadExcel())->withHeadings()->allFields()
        ];
    }

    public static function label()
    {
        return 'Recruitment Of Management Assistant';
    }
}
