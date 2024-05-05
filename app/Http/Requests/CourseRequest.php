<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // You can add authorization logic here if needed
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'course_name' => 'required|max:30',
            'unit' => 'required|integer|min:1',
            'location' => 'required|max:30',
            'schedule' => 'required|max:30',
            'teacher_id' => 'required|exists:teachers,id'
        ];
    }
}
