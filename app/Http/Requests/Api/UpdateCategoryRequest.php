<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:100|unique:categories,name,' . $this->category->id,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la categoría es obligatorio y no puede quedar vacío.',
            'name.string'   => 'El nombre de la categoría debe ser un texto válido.',
            'name.max'      => 'El nombre es demasiado largo. No puede superar los 100 caracteres.',
            'name.unique'   => 'Ya existe una categoría registrada con ese mismo nombre.',
        ];
    }
}
