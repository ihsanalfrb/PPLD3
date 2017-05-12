IdentifyImageRequest.php
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdentifyImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required_unless:url,null|mimes:jpeg,jpg,png,gif|max:10000|required_without:file|url',
            'url' => 'required_unless:file,null|required_without:url',

        ];
    }
    public function messages()
    {
        return [
            'file.mimes' => 'Tipe File tidak valid',
            'url.required_unless' => 'Pilih setidaknya satu jenis upload',
            'file.required_unless' => 'Pilih setidaknya satu jenis upload',
            'url.required_without' => 'Tidak bisa mengupload dari 2 sumber sekaligus',
        ];
    }
}
