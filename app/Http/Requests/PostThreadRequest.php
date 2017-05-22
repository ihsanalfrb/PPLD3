<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostThreadRequest extends FormRequest
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
            'nama_thread' => 'required|max:200|min:3',
            'content' => 'required|max:400|min:3'
        ];
    }

    public function messages()
    {
        return [
            'nama_thread.required' => 'Judul komentar tidak boleh kosong',
            'content.required' => 'Isi Thread tidak boleh kosong',
            'nama_thread.max' => 'Judul komentar maksimal :max karakter',
            'nama_thread.min' => 'Judul komentar minimal harus :min karakter',
            'content.max' => 'Isi komentar maksimal :max karakter',
            'content.min' => 'Isi komentar minimal :min karakter'
        ];
    }
}
