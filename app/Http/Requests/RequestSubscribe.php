<?php
/*
 * This engine owned and produced by hyipis studio.
 * Visit our website: https://hyip.is/
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSubscribe extends FormRequest
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
            'email' => 'required|email',
        ];
    }
}
