<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRealtorRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if('PUT' == $method) {
            return [
                'name' => ['required'],
                'email' => ['required', 'email'],
            ];
        }
        else {
            return [
                'name' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
            ];
        }
    }
}
