<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Book::with(['category'])->latest()->get();

        return view('pages.admin.book.index', [
            'items' => $items,
            'title' => 'BOOKS'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $kode_buku = Book::kode();
        return view('pages.admin.book.create',[
            'categories' => $categories,
            'kode_buku' => $kode_buku,
            'title' => 'ADD BOOK'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );
        $data['slug'] = Str::slug($request->judul);

        $hasil = Book::create($data);

        if ($hasil) {
            alert()->success('Success','New Book Has Been Added!');
            return redirect()->route('book.index')->with('success', 'New Book Has Been Added!');
        } else {
            alert()->error('Error','Opps, New Book Cannot Be Added!');
            return redirect()->route('book.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Book::findOrFail($id);

        return view('pages.admin.book.detail', [
            'item' => $item,
            'title' => 'BOOK DETAIL'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $item = Book::findOrFail($id);

        return view('pages.admin.book.edit', [
            'item' => $item,
            'categories' => $categories,
            'title' => 'EDIT BOOK',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        
        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store(
                'assets/gallery', 'public'
            );
        }

        $item = Book::findOrFail($id);
        $edit = $item->update($data);

        if($edit) {
            alert()->success('Success', 'Book Has Been Updated!');
            return redirect()->route('book.index')->with('edit', 'Book Has Been Updated!');
        }
            alert()->error('Error','Opps, Book Cannot Be Updated!');
            return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if($book->image){
            Storage::delete($book->image);
        }
        $item = Book::findOrFail($book->id);
        $delete = $item->delete();

        if ($delete) {
            alert()->success('Success','Book Has Been Deleted!');
            return redirect()->route('book.index')->with('delete', 'Book Has Been Deleted!');
        }
        alert()->error('Error','Opps, Book Cannot Be Deleted!');
        return redirect()->route('book.index');
    }
}
