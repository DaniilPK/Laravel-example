<?php

namespace App\Http\Requests;

use App\Models\Categories;
use App\Models\Datacollecting;
use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'name' => 'required|string',
            'price' => 'required|integer',
        ];
    }
}

