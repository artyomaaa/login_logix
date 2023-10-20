<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|integer',
            'text' => 'required|min:1|max:1000',
            'is_blog' => 'required|boolean',
            'is_news' => 'required|boolean',
        ];
    }
}
