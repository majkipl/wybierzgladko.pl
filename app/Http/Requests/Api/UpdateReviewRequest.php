<?php

namespace App\Http\Requests\Api;

use App\Enums\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $products = implode(',', Product::ALL);
        return [
            'content' => 'bail|required|string|max:4096',
            'product' => 'bail|required|in:' . $products,
            'id' => 'required|integer|exists:reviews,id'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'required' => 'Pole jest wymagane.',
            'string' => 'Wprowadź wartość tekstową.',
            'max' => 'Pole wymaga maksymalnie :max znaków.',
            'in' => 'Wybierz poprawną wartość.',
            'unique' => 'Wartość musi być unikalna.',
            'exists' => 'Wpis nie istnieje.'
        ];
    }
}
