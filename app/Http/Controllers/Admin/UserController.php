<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all();

        return view('pages.admin.user', [
            'items' => $items,
            "title" => 'USER'
        ]);
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);

        $delete = $item->delete();

        if ($delete) {
            alert()->success('Success','An User Has Been Deleted!');
            return redirect()->route('user.index')->with('delete', 'User Has Been Deleted!');
        }
        alert()->error('Error','Opps, User Cannot Be Deleted!');
        return redirect()->route('member.index');
    }
}
