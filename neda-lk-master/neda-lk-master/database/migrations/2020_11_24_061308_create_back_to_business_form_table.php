<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackToBusinessFormTable extends Migration
{
    public function up()
    {
        Schema::create('back_to_business_form', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->longText('address');
            $table->string('national_identification_card_no');
            $table->date('birthday');
            $table->enum('gender', [
                'male',
                'female'
            ])->nullable();
            $table->string('mobile');
            $table->string('phone');
            $table->string('email');

            $table->string('business_name');
            $table->string('business_registration_number');
            $table->date('business_start_date');
            $table->text('district');
            $table->text('divisional_secretariat');
            $table->text('gn_division');

            $table->string('legal_nature_of_business');
            $table->string('primary_industry');

            $table->longText('business_description');

            $table->text('business_operational_period');

            $table->text('focus_market');

            $table->text('customers_before_terrorist_attacks_and_covid');
            $table->text('customers_after_terrorist_attacks_and_covid');

            $table->text('annual_gross_income_for_the_last_three_years');

            $table->text('difference_of_gross_income_for_the_last_three_years');

            $table->text('full_time_employees_before_terrorist_attacks_and_covid');
            $table->text('part_time_employees_before_terrorist_attacks_and_covid');

            $table->text('full_time_employees_after_terrorist_attacks_and_covid');
            $table->text('part_time_employees_after_terrorist_attacks_and_covid');

            $table->text('impact_on_business_after_terrorist_attacks_and_covid');
            $table->text('business_currently_has_loans_leases');
            $table->text('business_currently_has_formal_or_informal_loans');

            $table->text('what_is_required_to_revitalize_the_business');
            $table->text('concession_money_amount');
            $table->text('loan_amount');
            $table->text('credit_update_amount');

            $table->text('bank_and_branch_of_loan_one');
            $table->text('bank_and_branch_of_loan_two');
            $table->text('bank_and_branch_of_loan_three');

            $table->text('bank_credit_facility_number_one');
            $table->text('bank_credit_facility_number_two');
            $table->text('bank_credit_facility_number_three');

            $table->text('loan_scheme_one');
            $table->text('loan_scheme_two');
            $table->text('loan_scheme_three');

            $table->text('year_and_month_of_obtaining_loan_one');
            $table->text('year_and_month_of_obtaining_loan_two');
            $table->text('year_and_month_of_obtaining_loan_three');

            $table->text('total_loans_obtained_one');
            $table->text('total_loans_obtained_two');
            $table->text('total_loans_obtained_three');

            $table->text('deposited_as_collateral_to_obtain_a_loan_one');
            $table->text('deposited_as_collateral_to_obtain_a_loan_two');
            $table->text('deposited_as_collateral_to_obtain_a_loan_three');

            $table->text('term_of_the_loan_one');
            $table->text('term_of_the_loan_two');
            $table->text('term_of_the_loan_three');

            $table->text('year_month_loan_is_due_one');
            $table->text('year_month_loan_is_due_two');
            $table->text('year_month_loan_is_due_three');

            $table->text('debt_default_years_months_one');
            $table->text('debt_default_years_months_two');
            $table->text('debt_default_years_months_three');

            $table->text('remaining_installments_one');
            $table->text('remaining_installments_two');
            $table->text('remaining_installments_three');

            $table->text('total_interest_to_be_paid_one');
            $table->text('total_interest_to_be_paid_two');
            $table->text('total_interest_to_be_paid_three');

            $table->text('applied_for_government_assistance_after_terrorist_attacks_covid');
            $table->text('eligible_for_insurance_compensation_received');
            $table->text('received_concessions_introduced_by_the_central_bank');
            $table->text('received_for_different_relief');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('back_to_business_form');
    }
}
