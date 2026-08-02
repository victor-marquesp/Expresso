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
            'picture' => ['image', 'max:10240'],
            'price' => ['required', 'numeric', 'min:0'],
            'size' => ['required', Rule::enum(Size::class)],
            'heat' => ['required', Rule::enum(Heat::class)],
            'volume_ml' => ['required', 'integer', 'min:1']
        ];

    }
    
    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'description' => 'descrição',
            'picture' => 'foto',
            'price' => 'preço',
            'size' => 'tamanho',
            'heat' => 'temperatura',
            'volume_ml' => 'volume',
        ];
    }
}
