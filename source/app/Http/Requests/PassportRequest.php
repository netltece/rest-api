<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassportRequest extends FormRequest
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
            //
        ];
    }

    public function validateAny()
    {
        return $this->validate([
            'id' => ['numeric'],
            'series' => ['digits_between:4,4'],
            'number' => ['digits_between:6,6'],
            'date_issue' => ['date'],
            'place_issue' => ['string', 'max:64'],
            'department_code' => ['digits_between:6,6'],
            'last_name' => ['string', 'max:128'],
            'first_name' => ['string', 'max:64'],
            'father_name' => ['string', 'max:64'],
            'sex' => ['boolean'],
            'birthday' => ['date'],
            'birth_city' => ['string', 'max:64'],
            'reg_city' => ['string', 'max:64'],
            'is_short_representation' => ['boolean'],
            'page' => ['numeric']
        ]);
    }
}
