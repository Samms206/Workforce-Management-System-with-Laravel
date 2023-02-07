<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
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
            'employee_id' => 'required',
            'date' => 'required|unique:attendances,date,NULL,id,employee_id,' . $this->employee_id
        ];
    }

    public function messages()
    {
        return [
            'employee_id.required' => 'Employee ID tidak boleh kosong!',
            'date.unique' => 'Anda sudah absen hari ini!'
        ];
    }
}
