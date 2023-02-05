<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
        return [
            'name' => ['required'],
            'type' => ['required', Rule::in(['H','h', 'C','c', 'A','a'])],
            'address' => ['required'],
            'square' => ['required'],
            'realtorId' => [],
            'neighborhoodId' => [],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'realtor_id' => $this->realtorId,
            'neighborhood_id' => $this->neighborhoodId,
        ]);
    }
}
