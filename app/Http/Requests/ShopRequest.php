<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ShopRequest extends FormRequest
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
            'name' => 'required|max:20',
            'img_pass' => 'required',
            'summary' => 'required|max:120',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'min_number' => 'required|integer',
            'max_number' => 'required|integer',
            'user_id' => 'required|integer',
            'area_id' => 'required|integer',
            'genre_id' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '店舗名を入力してください。',
            'name.max' => '店舗名は20文字以内にしてください。',
            'img_pass.required' => '店舗画像を選択してください。',
            'summary.required' => '店舗概要を入力してください。',
            'summary.max' => '店舗概要は120文字以内にしてください。',
            'opening_time.required' => '営業開始時間を選択してください。',
            'closing_time.required' => '営業終了時間を選択してください。',
            'min_number.required' => '予約最小人数を選択してください。',
            'max_number.required' => '予約最大人数を選択してください。',
            'user_id.required' => '店舗代表者名は必須です。',
            'area_id.required' => '店舗エリアを選択してください。',
            'genre_id.required' => '店舗ジャンルを選択してください。',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'status' => 400,
            'errors' => $validator->errors(),
        ], 400);
        throw new HttpResponseException($response);
    }
}
