<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Restore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RestoreRequest;

class RestoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tgl_kembali = date('Y-m-d');
        $items = Restore::with(['loan'])->latest()->get();

        return view('pages.admin.restore.index', [
            'items' => $items,
            'tgl_kembali' => $tgl_kembali,
            "title" => 'RESTORE'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $item = Loan::findOrFail($id);

        // return view('pages.admin.restore.create', [
        //     'item' => $item,
        //     'title' => 'EDIT BOOK',
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(RestoreRequest $request, $id)
    {
        // $data = $request->all();

        // $item = Loan::findOrFail($id);
        // $edit = $item->update($data);
        // if($edit) {
        //     alert()->success('Success', 'Book Has Been Updated!');
        //     return redirect()->route('restore.index')->with('edit', 'Book Has Been Updated!');
        // }
        //     alert()->error('Error','Opps, Book Cannot Be Updated!');
        //     return redirect()->route('restore.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
