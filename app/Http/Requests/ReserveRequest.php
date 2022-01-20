<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReserveRequest extends FormRequest
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
            'name' => 'max:40',
            'user_id' => 'required|integer',
            'shop_id' => 'required|integer',
            'date' => 'required|date|after:tomorrow',
            'time' => 'required',
            'number' => 'required|integer|min:1',
        ];
    }
    public function messages()
    {
        return [
            'name.max' => '予約名は40文字以内で入力してください。',
            'user.id.required' => 'ユーザー情報は必須です',
            'shop_id.required' => '店舗情報は必須です',
            'date.required' => '来店予定日の選択は必須です',
            'date.after' => '来店予定日は明日以降で選択してください',
            'time.required' => '予約時間の選択は必須です',
            'number.required' => '予約人数の選択は必須です',
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
