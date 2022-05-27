<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BackToBusiness
 * @package App\Models\Forms
 */
class BackToBusiness extends Model
{

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'back_to_business_form';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'registration_id',
        'district',
        'divisional_secretariat',
        'gn_division',
        'name',
        'address',
        'national_identification_card_no',
        'birthday',
        'birthday_range',
        'gender',
        'mobile',
        'phone',
        'email',
        'business_name',
        'business_registration_number',
        'business_start_date',
        'legal_nature_of_business',
        'primary_industry',
        'business_description',
        'business_operational_period',
        'focus_market',
        'customers_before_terrorist_attacks_and_covid',
        'customers_after_terrorist_attacks_and_covid',
        'annual_gross_income_for_the_last_three_years',
        'difference_of_gross_income_for_the_last_three_years',
        'full_time_employees_before_terrorist_attacks_and_covid',
        'part_time_employees_before_terrorist_attacks_and_covid',
        'full_time_employees_after_terrorist_attacks_and_covid',
        'part_time_employees_after_terrorist_attacks_and_covid',
        'impact_on_business_after_terrorist_attacks_and_covid',
        'business_currently_has_loans_leases',
        'business_currently_has_formal_or_informal_loans',
        'concession_money_amount',
        'what_is_required_to_revitalize_the_business',
        'loan_amount',
        'credit_update_amount',
        'bank_and_branch_of_loan_one',
        'bank_and_branch_of_loan_two',
        'bank_and_branch_of_loan_three',
        'bank_credit_facility_number_one',
        'bank_credit_facility_number_two',
        'bank_credit_facility_number_three',
        'loan_scheme_one',
        'loan_scheme_two',
        'loan_scheme_three',
        'year_and_month_of_obtaining_loan_one',
        'year_and_month_of_obtaining_loan_two',
        'year_and_month_of_obtaining_loan_three',
        'total_loans_obtained_one',
        'total_loans_obtained_two',
        'total_loans_obtained_three',
        'deposited_as_collateral_to_obtain_a_loan_one',
        'deposited_as_collateral_to_obtain_a_loan_two',
        'deposited_as_collateral_to_obtain_a_loan_three',
        'term_of_the_loan_one',
        'term_of_the_loan_two',
        'term_of_the_loan_three',
        'year_month_loan_is_due_one',
        'year_month_loan_is_due_two',
        'year_month_loan_is_due_three',
        'debt_default_years_months_one',
        'debt_default_years_months_two',
        'debt_default_years_months_three',
        'remaining_installments_one',
        'remaining_installments_two',
        'remaining_installments_three',
        'total_interest_to_be_paid_one',
        'total_interest_to_be_paid_two',
        'total_interest_to_be_paid_three',
        'applied_for_government_assistance_after_terrorist_attacks_covid',
        'eligible_for_insurance_compensation_received',
        'received_concessions_introduced_by_the_central_bank',
        'received_for_different_relief',
    ];

    protected $dates = [
        'birthday',
        'business_start_date',
    ];
}
