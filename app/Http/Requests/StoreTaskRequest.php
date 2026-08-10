<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required','string','max:50'
            ],
            'description' => [
                'required', 'string', 'max:500'
            ],
            'state' => [
                'boolean'
            ],
            'category_id' => [
                'nullable', 'exists:categories,id'
            ],
            'tags' => [
                'nullable','array'
            ],
            'tags.*' => [
                'integer', 'distinct', 'exists:tags,id'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.max' => 'El título no puede superar los :max caracteres.',

            'description.required' => 'La descripción es obligatorio.',
            'description.max' => 'La descripción no puede superar los :max caracteres.',

            'category_id.exists' => 'La categoría seleccionada no existe.',

            'tags.array' => 'Las etiquetas son inválidas.',
            'tags.*.exists' => 'Una de las etiquetas seleccionadas no existe.',
            'tags.*.distinct' => 'No se pueden repetir etiquetas.',
        ];
    }
}
