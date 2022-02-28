<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Http\Requests\Admin\MemberRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Member::all();

        return view('pages.admin.member.index', [
            'items' => $items,
            "title" => 'MEMBER'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.member.create', [
            "title" => 'ADD MEMBER'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $data = $request->all();
        
        $hasil = Member::create($data);
        if ($hasil) {
            alert()->success('Success','New Member Has Been Added!');
            return redirect()->route('member.index')->with('success', 'New Member Has Been Added!');
        } else {
            alert()->error('Error','Opps, New Member Cannot Be Added!');
            return redirect()->route('member.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_anggota)
    {
        $item = Member::findOrFail($no_anggota);

        return view('pages.admin.member.show', [
            'item' => $item,
            "title" => 'DETAIL MEMBER'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_anggota)
    {
        $item = Member::findOrFail($no_anggota);

        return view('pages.admin.member.edit', [
            'item' => $item,
            "title" => 'EDIT MEMBER'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $no_anggota)
    {
        $data = $request->all();

        $item = Member::findOrFail($no_anggota);

        $edit = $item->update($data);

        if($edit) {
            alert()->success('Success', 'Member Has Been Updated!');
            return redirect()->route('member.index')->with('edit', 'Member Has Been Updated!');
        }
            alert()->error('Error','Opps, Member Cannot Be Updated!');
            return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Member::findOrFail($id);

        $delete = $item->delete();

        if ($delete) {
            alert()->success('Success','A Member Has Been Deleted!');
            return redirect()->route('member.index')->with('delete', 'Member Has Been Deleted!');
        }
        alert()->error('Error','Opps, Member Cannot Be Deleted!');
        return redirect()->route('member.index');
    }
}
