<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.name' => 'required|string|max:100',
            'post.text' => 'required|string|max:4000',
        ];
    }
}
