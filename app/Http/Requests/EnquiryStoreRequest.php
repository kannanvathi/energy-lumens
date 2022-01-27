<?php

namespace App\Http\Requests;

use App\Models\enquiry_data;
use Illuminate\Foundation\Http\FormRequest;

class EnquiryStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:enquiry_datas'],
            'mobile_no' => ['required',  'unique:enquiry_datas'],
            'message' => ['required'],
        ];
    }
}
