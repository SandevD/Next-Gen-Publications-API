<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGradeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
        'name' => 'required|unique:grades,name,'. $this->route('grade')->id            
        ];
    }
}
