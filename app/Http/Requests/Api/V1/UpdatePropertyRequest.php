<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePropertyRequest extends FormRequest
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
                'type' => ['required', Rule::in(['H','h', 'C','c', 'A','a'])],
                'address' => ['required'],
                'square' => ['required'],
                'realtorId' => [],
                'neighborhoodId' => [],
            ];
        }
        else {
            return [
                'name' => ['sometimes', 'required'],
                'type' => ['sometimes', 'required', Rule::in(['H','h', 'C','c', 'A','a'])],
                'address' => ['sometimes', 'required'],
                'square' => ['sometimes', 'required'],
                'realtorId' => [],
                'neighborhoodId' => [],
            ];
        }
        
    }

    protected function prepareForValidation()
    {
        if($this->realtorId) {
            $this->merge([
                'realtor_id' => $this->realtorId,
            ]);
        }

        if($this->neighborhoodId) {
            $this->merge([
                'neighborhood_id' => $this->neighborhoodId,
            ]);
        }
    }
}
