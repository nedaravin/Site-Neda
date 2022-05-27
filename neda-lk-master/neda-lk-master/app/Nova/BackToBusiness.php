<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use App\Models\Forms\BackToBusiness as BackToBusinessModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

/**
 * Class BackToBusiness
 * @package App\Nova
 */
class BackToBusiness extends Resource
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
    public static $model = BackToBusinessModel::class;

    /**
     * @var string
     */
    public static $title = 'id';

    /**
     * @var string[]
     */
    public static $search = [
        'name'
    ];

    /**
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Registration ID', 'registration_id'),
            Text::make('Name', 'name'),
            Text::make('Address', 'address')->hideFromIndex(),
            Text::make('National identification card no', 'national_identification_card_no')->hideFromIndex(),
            Text::make('Birthday', 'birthday')->hideFromIndex(),
            Text::make('Gender', 'gender'),
            Text::make('Mobile', 'mobile')->hideFromIndex(),
            Text::make('Phone', 'phone')->hideFromIndex(),
            Text::make('Email', 'email')->hideFromIndex(),
            Text::make('District', 'district'),
            Text::make('Divisional secretariat', 'divisional_secretariat'),
            Text::make('Gn division', 'gn_division'),
            Text::make('Business name', 'business_name'),
            Text::make('Business registration number', 'business_registration_number')->hideFromIndex(),
            Text::make('Business start date', 'business_start_date')->hideFromIndex(),
            Text::make('Legal nature of business', 'legal_nature_of_business')->hideFromIndex(),
            Text::make('Primary industry', 'primary_industry')->hideFromIndex(),
            Text::make('Business description', 'business_description')->hideFromIndex(),
            Text::make('Business operational period', 'business_operational_period')->hideFromIndex(),
            Text::make('Focus market', 'focus_market')->hideFromIndex(),
            Text::make('Customers before terrorist attacks and covid', 'customers_before_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Customers after terrorist attacks and covid', 'customers_after_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Annual gross income for the last three years', 'annual_gross_income_for_the_last_three_years')->hideFromIndex(),
            Text::make('Difference of gross income for the last three years', 'difference_of_gross_income_for_the_last_three_years')->hideFromIndex(),
            Text::make('Full time employees before terrorist attacks and covid', 'full_time_employees_before_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Part time employees before terrorist attacks and covid', 'part_time_employees_before_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Full time employees after terrorist attacks and covid', 'full_time_employees_after_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Part time employees after terrorist attacks and covid', 'part_time_employees_after_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Impact on business after terrorist attacks and covid', 'impact_on_business_after_terrorist_attacks_and_covid')->hideFromIndex(),
            Text::make('Business currently has loans leases', 'business_currently_has_loans_leases')->hideFromIndex(),
            Text::make('Business currently has formal or informal loans', 'business_currently_has_formal_or_informal_loans')->hideFromIndex(),
            Text::make('Concession money amount', 'concession_money_amount')->hideFromIndex(),
            Text::make('What is required to revitalize the business', 'what_is_required_to_revitalize_the_business')->hideFromIndex(),
            Text::make('Loan amount', 'loan_amount')->hideFromIndex(),
            Text::make('Credit update amount', 'credit_update_amount')->hideFromIndex(),
            Text::make('Bank and branch of loan one', 'bank_and_branch_of_loan_one')->hideFromIndex(),
            Text::make('Bank and branch of loan two', 'bank_and_branch_of_loan_two')->hideFromIndex(),
            Text::make('Bank and branch of loan three', 'bank_and_branch_of_loan_three')->hideFromIndex(),
            Text::make('Bank credit facility number one', 'bank_credit_facility_number_one')->hideFromIndex(),
            Text::make('Bank credit facility number two', 'bank_credit_facility_number_two')->hideFromIndex(),
            Text::make('Bank credit facility number three', 'bank_credit_facility_number_three')->hideFromIndex(),
            Text::make('Loan scheme one', 'loan_scheme_one')->hideFromIndex(),
            Text::make('Loan scheme two', 'loan_scheme_two')->hideFromIndex(),
            Text::make('Loan scheme three', 'loan_scheme_three')->hideFromIndex(),
            Text::make('Year and month of obtaining loan one', 'year_and_month_of_obtaining_loan_one')->hideFromIndex(),
            Text::make('Year and month of obtaining loan two', 'year_and_month_of_obtaining_loan_two')->hideFromIndex(),
            Text::make('Year and month of obtaining loan three', 'year_and_month_of_obtaining_loan_three')->hideFromIndex(),
            Text::make('Total loans obtained one', 'total_loans_obtained_one')->hideFromIndex(),
            Text::make('Total loans obtained two', 'total_loans_obtained_two')->hideFromIndex(),
            Text::make('Total loans obtained three', 'total_loans_obtained_three')->hideFromIndex(),
            Text::make('Deposited as collateral to obtain a loan one', 'deposited_as_collateral_to_obtain_a_loan_one')->hideFromIndex(),
            Text::make('Deposited as collateral to obtain a loan two', 'deposited_as_collateral_to_obtain_a_loan_two')->hideFromIndex(),
            Text::make('Deposited as collateral to obtain a loan three', 'deposited_as_collateral_to_obtain_a_loan_three')->hideFromIndex(),
            Text::make('Term of the loan one', 'term_of_the_loan_one')->hideFromIndex(),
            Text::make('Term of the loan two', 'term_of_the_loan_two')->hideFromIndex(),
            Text::make('Term of the loan three', 'term_of_the_loan_three')->hideFromIndex(),
            Text::make('Year month loan is due one', 'year_month_loan_is_due_one')->hideFromIndex(),
            Text::make('Year month loan is due two', 'year_month_loan_is_due_two')->hideFromIndex(),
            Text::make('Year month loan is due three', 'year_month_loan_is_due_three')->hideFromIndex(),
            Text::make('Debt default years months one', 'debt_default_years_months_one')->hideFromIndex(),
            Text::make('Debt default years months two', 'debt_default_years_months_two')->hideFromIndex(),
            Text::make('Debt default years months three', 'debt_default_years_months_three')->hideFromIndex(),
            Text::make('Remaining installments one', 'remaining_installments_one')->hideFromIndex(),
            Text::make('Remaining installments two', 'remaining_installments_two')->hideFromIndex(),
            Text::make('Remaining installments three', 'remaining_installments_three')->hideFromIndex(),
            Text::make('Total interest to be paid one', 'total_interest_to_be_paid_one')->hideFromIndex(),
            Text::make('Total interest to be paid two', 'total_interest_to_be_paid_two')->hideFromIndex(),
            Text::make('Total interest to be paid three', 'total_interest_to_be_paid_three')->hideFromIndex(),
            Text::make('Applied for government assistance after terrorist attacks covid', 'applied_for_government_assistance_after_terrorist_attacks_covid')->hideFromIndex(),
            Text::make('Eligible for insurance compensation received', 'eligible_for_insurance_compensation_received')->hideFromIndex(),
            Text::make('Received concessions introduced by the central bank', 'received_concessions_introduced_by_the_central_bank')->hideFromIndex(),
            Text::make('Received for different relief', 'received_for_different_relief')->hideFromIndex(),
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
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
}
