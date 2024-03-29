<?php

namespace App\Http\Requests;

use App\Rules\Hankaku;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SettingRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $auth_id = Auth::id();
        return [
            'name' => ['required', 'max:100', new Hankaku],
            'slug' => 'required|max:36|unique:users,slug,'.$auth_id,
            'email' => "nullable|max:36|unique:users,email,{$auth_id}"
        ];
    }
}
