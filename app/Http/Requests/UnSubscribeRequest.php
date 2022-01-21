<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnSubscribeRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('subscribe')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [];
    }
}
