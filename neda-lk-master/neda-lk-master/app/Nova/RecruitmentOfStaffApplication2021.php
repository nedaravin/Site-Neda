<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use App\Models\Forms\RecruitmentOfStaffApplication2021 as RecruitmentOfStaffApplication2021Model;
use App\Nova\Filters\AgeFilter;
use App\Nova\Filters\EpFilter;
use App\Nova\Filters\GraduatedBeforeSubmissionFilter;
use Carbon\Carbon;
use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use JoshMoreno\Html\Html;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use NrmlCo\NovaBigFilter\NovaBigFilter;

/**
 * Class RecruitmentOfStaffApplication2021
 * @package App\Nova
 */
class RecruitmentOfStaffApplication2021 extends Resource
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
    public static $model = RecruitmentOfStaffApplication2021Model::class;

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
            Text::make('Job Type', 'job_type')->displayUsing(function($value){
                if($value){
                    return ucwords(str_replace('enterprise promotion', 'EP', str_replace('_', ' ', $value)));
                }
                return $value;
            })->sortable(),
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

            Text::make('Date of graduation', 'education_date_of_graduation')->hideFromIndex(),
            Text::make('University institute', 'education_university_institute')->hideFromIndex(),
            Text::make('Registration number', 'education_registration_number')->hideFromIndex(),
            Text::make('Degree', 'education_degree')->hideFromIndex(),
            Text::make('Subjects and field', 'education_subjects_and_field')->hideFromIndex(),
            Text::make('Index no', 'education_index_no')->hideFromIndex(),
            Text::make('Language medium of examination', 'education_language_medium_of_examination')->hideFromIndex(),

            Text::make('Ordinary Level passed year', 'education_ol_passed_year')->hideFromIndex(),
            Text::make('Ordinary Level index no', 'education_ol_index_no')->hideFromIndex(),
            Text::make('Ordinary Level language', 'education_ol_language')->hideFromIndex(),
            Text::make('Ordinary Level english score', 'education_ol_english_score')->hideFromIndex(),

            Text::make('Advance Level passed year', 'education_al_passed_year')->hideFromIndex(),
            Text::make('Advance Level index no', 'education_al_index_no')->hideFromIndex(),
            Text::make('Advance Level language', 'education_al_language')->hideFromIndex(),
            Text::make('Advance Level english score', 'education_al_english_score')->hideFromIndex(),


//            Text::make('Educational Qualifications', 'educational_qualifications')->hideFromIndex(),
//            Text::make('Work Experience', 'work_experience')->hideFromIndex(),


            Html::make('Educational Qualifications')
                ->html(function() {
                    if($this->educational_qualifications && is_array($this->educational_qualifications)){
                        $results = $this->educational_qualifications;

                        $subjects = '<table class="table table-tight"><thead><th>Institute</th><th>Qualification</th><th>Date</th></thead>';
                        foreach (range(1, 7) as $grade){
                            $subjects .= '<tr>
                                            <td>'. $results['institutes_'.$grade] .'</td>
                                            <td>'. $results['qualification_'.$grade] .'</td>
                                            <td>'. $results['date_'.$grade] .'</td>
                                        </tr>';
                        }
                        $subjects .= '</table>';

                        return '<div class="px-8 py-6 border-b border-40">
                                    <h3>Educational Qualifications</h3><br>
                                    '.$subjects.'
                                </div>';
                    }
                    return '';

                })->hideFromIndex(),

            Html::make('Work Experience')
                ->html(function() {
                    if($this->work_experience && is_array($this->work_experience)){
                        $results = $this->work_experience;
                        $subjects = '<table class="table table-tight"><thead><th>Institute</th><th>Designation</th><th>Date</th></thead>';
                        foreach (range(1, 4) as $grade){
                            $subjects .= '<tr>
                                            <td>'. $results['institutes_'.$grade] .'</td>
                                            <td>'. $results['designation_'.$grade] .'</td>
                                            <td>'. $results['date_'.$grade] .'</td>
                                        </tr>';
                        }
                        $subjects .= '</table>';

                        return '<div class="px-8 py-6 border-b border-40">
                                    <h3>Work Experience</h3><br>
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
            new EpFilter(),
            new AgeFilter(),
//            new GraduatedBeforeSubmissionFilter(),
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

//    public static function indexQuery(NovaRequest $request, $query)
//    {
//        return $query
//            ->whereDate('birthday', '>', Carbon::now()->subYears());
////            ->whereDate('education_date_of_graduation', '<', '2021-01-12');
//    }

    public static function label()
    {
        return '(EPO) – 01 & (EPA) – 03';
    }
}
