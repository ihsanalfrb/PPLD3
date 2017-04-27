<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCommentRequest extends FormRequest
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
        return [
            'judul_komentar' => 'required|max:200|min:3',
            'isi_komentar' => 'required|max:400|min:3'
        ];
    }

    public function messages()
    {
        return [
            'judul_komentar.required' => 'Judul komentar tidak boleh kosong',
            'isi_komentar.required' => 'Isi Komentar tidak boleh kosong',
            'judul_komentar.max' => 'Judul komentar maksimal :max karakter',
            'judul_komentar.min' => 'Judul komentar minimal harus :min karakter',
            'isi_komentar.max' => 'Isi komentar maksimal :max karakter',
            'isi_komentar.min' => 'Isi komentar minimal :min karakter'
        ];
    }
}
