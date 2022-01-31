<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Member;
use Illuminate\Validation\Rule;

class MemberRequest extends FormRequest
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
    public function rules(Member $member)
    {
        return [
            'no_anggota' => 'required', 'unique:members' . $member->id,
            'nama_anggota' => ['required', 'max:50'],
            'jen_kel' => ['required'],
            'status' => ['required'],
            'alamat' => ['required', 'max:100'],
            'email' => ['max:100'],
            'no_telp' => ['max:13', 'required']
        ];
    }
}
