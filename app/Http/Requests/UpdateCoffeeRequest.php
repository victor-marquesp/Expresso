<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use App\Enums\Size;
use App\Enums\Heat;

class UpdateCoffeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules() : array {

        return [
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'size' => ['required', Rule::enum(Size::class)],
            'heat' => ['required', Rule::enum(Heat::class)],
            'volume_ml' => ['required', 'integer', 'min:1']
        ];

    }

    public function messages() : array
    {
        return [
            'name.required' => 'O nome do café é obrigatório',
            'name.string' => 'O nome do café deve ser uma string',

            'description.string' => 'Descrição do café deve ser uma string',

            'price.required' => 'Preço do café é obrigatório',
            'price.numeric' => 'Preço do café deve ser um inteiro',
            'price.min' => 'Preço não pode ser negativo',

            'size.required' => 'Tamanho do café é obrigatório',
            'size.enum' => 'Tamanho do café deve pertencer à enum',
            'heat.required' => 'Temperatura do café é obrigatória',
            'heat.enum' => 'Temperatura do café deve pertencer à enum',

            'volume_ml.required' => 'O volume do café é obrigatório',
            'volume_ml.integer' => 'O volume do café deve ser um inteiro',
            'volume_ml.min' => 'O volume do café deve ser positivo',

        ];
    }
}
