<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'title' =>'required|string|max:255',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'description' =>'nullable',
            'status' =>'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'start_date.date' => 'The start date must be a valid date.',
            'duration.integer' => 'The duration must be an integer.',
            'description.string' => 'The description must be a string.',
            'status.integer' => 'The status must be an integer.',
        ];
    }
}
