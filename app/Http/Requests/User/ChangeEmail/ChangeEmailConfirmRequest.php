<?php

namespace App\Http\Requests\User\ChangeEmail;

use Illuminate\Foundation\Http\FormRequest;

class ChangeEmailConfirmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }
}
