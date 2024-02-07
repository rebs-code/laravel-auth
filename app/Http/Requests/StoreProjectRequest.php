<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:projects,name'],
            'description' => ['required', 'string'],
            'tech_stack' => ['required', 'string', 'max:255'],
            'repo_link' => ['required', 'url'],
            'image' => ['url', 'nullable'],
            'slug' => ['required', 'string', 'max:255', 'unique:projects,slug'],
        ];
    }
}
