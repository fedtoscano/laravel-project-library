<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Book;

class CreateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'title' => 'required|string|max:250',  // Campo obbligatorio, stringa, massimo 250 caratteri
        'description' => 'nullable|string',  // Campo facoltativo, stringa
        'genre' => 'required|string|max:40',  // Campo obbligatorio, stringa, massimo 40 caratteri
        'language' => 'required|string|max:30',  // Campo obbligatorio, stringa, massimo 30 caratteri
        'cover_img' => 'nullable|string|max:255',  // Campo facoltativo, stringa, massimo 255 caratteri (adatto per un URL)
        'isbn' => 'required|digits:13|unique:books,isbn',  // Campo obbligatorio, deve essere un numero con 13 cifre, unico nella tabella books
        'price' => 'required|numeric|min:0|max:99999.99',  // Campo obbligatorio, deve essere un numero, minimo 0 e massimo 99999.99
        'pages' => 'required|integer|min:1|max:65535',  // Campo obbligatorio, deve essere un numero intero, minimo 1 e massimo 65535
        'is_available' => 'required|boolean',  // Campo obbligatorio, deve essere un booleano
        'state' => 'nullable|string|max:255',  // Campo facoltativo, stringa, massimo 255 caratteri
        'category_id' => 'nullable|exists:categories,id',  // Campo facoltativo, deve esistere nella tabella categories
        'editor_id' => 'nullable|exists:editors,id',  // Campo facoltativo, deve esistere nella tabella editors
        'translator_id' => 'nullable|exists:translators,id',  // Campo facoltativo, deve esistere nella tabella translators
        'author_id' =>'nullable|exists:authors,id'
        ];
    }

    // "title" => null
    // "author_id" => "7"
    // "translator_id" => "8"
    // "category_id" => "6"
    // "editor_id" => "11"
    // "genre" => "drama"
    // "condition" => "good"
    // "language" => "English"
    // "pages" => "1231"
    // "isbn" => "123123123"
    // "price" => "232"
}
