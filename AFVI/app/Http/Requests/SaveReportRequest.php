<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name_first_call_report' => 'min:0',
            'product_first_call_report' => 'min:0',
            'name_customer_first_call_report' => 'required',
            'lastname_customer_first_call_report' => 'required',
            'mail_adress_first_call_report' => 'required|email',
            'phone_numbrer_first_call_report' => 'required',
            'policy_holder_first_call_report' => 'required',
            'dni_customer_first_call_report' => 'required',
            'name_deceased_first_call_report' => 'required',
            'lastname_deceased_first_call_report' => 'required',
            'dni_deceased_first_call_report' => 'required',
            'cause_death_first_call_report' => 'required',
            'date_death_first_call_report' => 'required',
            'country_death_first_call_report' => 'required',
            'city_death_first_call_report' => 'required',
        ];
    }

    public function messages(){
        return [
            'name_customer_first_call_report.required' => 'Required Field name_customer_first_call_report',
            'lastname_customer_first_call_report.required' => 'Required Field lastname_customer_first_call_report',
            'mail_adress_first_call_report.required' => 'Required Field mail_adress_first_call_report',
            'phone_numbrer_first_call_report.required' => 'Required Field phone_numbrer_first_call_report',
            'policy_holder_first_call_report.required' => 'Required Field policy_holder_first_call_report',
            'dni_customer_first_call_report.required' => 'Required Field dni_customer_first_call_report',
            'name_deceased_first_call_report.required' => 'Required Field name_deceased_first_call_report',
            'lastname_deceased_first_call_report.required' => 'Required Field lastname_deceased_first_call_report',
            'dni_deceased_first_call_report.required' => 'Required Field dni_deceased_first_call_report',
            'cause_death_first_call_report.required' => 'Required Field cause_death_first_call_report',
            'date_death_first_call_report.required' => 'Required Field date_death_first_call_report',
            'country_death_first_call_report.required' => 'Required Field country_death_first_call_report',
            'city_death_first_call_report.required' => 'Required Field city_death_first_call_report',
        ];
    }
}
