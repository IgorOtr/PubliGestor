<?php

namespace App\Http\Requests\Empresa;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DeleteEmpresaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'company_id' => ['required', 'exists:empresas,id'],
        ];
    }
}
