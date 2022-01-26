<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Book;

class BookRequest extends FormRequest
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
    public function rules(Book $book)
    {
        return [
            'kode_buku' => 'required', 'unique:books'.$book->id,
            'judul' => ['required', 'max:255'],
            'pengarang' => ['required', 'max:100'],
            'penerbit' => ['required', 'max:100'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'jumlah' => ['integer'],
            'rak' => ['max:50'],
            'image' => 'required|image'
        ];
    }
}
