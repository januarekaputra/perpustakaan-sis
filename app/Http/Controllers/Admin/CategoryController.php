<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Category::all();

        return view('pages.admin.category.index', [
            'items' => $item,
            'title' => 'CATEGORIES'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode_kategori = Category::kode();
        return view('pages.admin.category.create',[
            'title' => 'ADD CATEGORY',
            'kode_kategori' => $kode_kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $hasil = Category::create($data);
        if ($hasil) {
            alert()->success('Success','New Category Has Been Added!');
            return redirect()->route('category.index')->with('success', 'New Category Has Been Added!');
        } else {
            alert()->error('Error','Opps, New Category Cannot Be Added!');
            return redirect()->route('category.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Category::findOrFail($id);
        $delete = $item->delete();

        if ($delete) {
            alert()->success('Success','Category Has Been Deleted!');
            return redirect()->route('category.index')->with('delete', 'Category Has Been Deleted!');
        }
        alert()->error('Error','Opps, Category Cannot Be Deleted!');
        return redirect()->route('category.index');
    }
}
