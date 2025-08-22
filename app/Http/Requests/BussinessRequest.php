<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BussinessRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'bussiness_category'=>'required',
            'bussiness_name'=>'required',
            'bussiness_email'=>'required',
            'bussiness_phone'=>'required|numeric',
            'bussiness_state'=>'required',
            'bussiness_city'=>'required',
            'youtube'=>'required',
            'facebook'=>'required',
            'instagram'=>'required',
            'twiter'=>'required',
            'bussiness_description'=>'required',
            'bussiness_terms'=>'required',
            'bussiness_image'=>'required',
        ];
    }
}
