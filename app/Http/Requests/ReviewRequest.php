<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReviewRequest extends FormRequest
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
            'evaluation' => 'required|integer|min:1|max:5',
            'comment' => 'required|max:120',
        ];
    }
    public function messages()
    {
        return [
            'evaluation.required' => '５段階で評価を選択してください。',
            'comment.required' => 'コメントを入力してください。',
            'comment.max' => 'コメントは120文字までです。',
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
