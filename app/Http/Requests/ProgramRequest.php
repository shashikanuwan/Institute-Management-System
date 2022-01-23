<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_ADMIN);
    }

    public function rules()
    {
        return [
            'start_at' => 'required',
            'user_id' => 'required|numeric',
            'grade_id' => 'required|numeric',
            'subject_id' => 'required|numeric'
        ];
    }
}
