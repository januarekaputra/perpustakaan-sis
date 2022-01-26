<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print()
    {
        $prints = Loan::where('keadaan', 'Dipinjam')->get();
        return view('pages.admin.loan.print', [
            'prints' => $prints,
        ]);
    }

    public function index()
    {
        $items = Loan::with(['member', 'book'])->get();

        return view('pages.admin.loan.index', [
            'items' => $items,
            "title" => 'LOAN'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::where('jumlah', '>', 0)->get();
        $members = Member::get();
        $tgl_pinjam = date('Y-m-d');
        $week = mktime(0,0,0,date("n"), date("j") + 7, date("Y"));
        $tgl_pengembalian = date('Y-m-d', $week);
        $kode_peminjaman = Loan::kode();
        
        return view('pages.admin.loan.create', [
            'books' => $books,
            'members' => $members,
            "title" => 'ADD LOAN',
            'kode_peminjaman' => $kode_peminjaman,
            'tgl_pinjam' => $tgl_pinjam,
            'tgl_pengembalian' => $tgl_pengembalian
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Loan $loan)
    {
        // var_dump($_POST);
        $validatedData = $request->validate([
            'members_id' => 'required|integer|exists:members,id',
            'kode_peminjaman' => ['required', 'unique:loans'.$loan->id],
            'tgl_pinjam' => ['required', 'date'],
            'tgl_pengembalian' => 'required|date',
            'books_id' => 'required|integer|exists:books,id'
        ]);
        
        $create = Loan::create($validatedData);
        $create->book->where('id', $create->books_id)
        ->update(['jumlah' => ($create->book->jumlah - 1),]);

        if ($create) {
            alert()->success('Success','New Loan Has Been Added!');
            return redirect()->route('loan.index')->with('success', 'New Loan Has Been Added!');
        } else {
            alert()->error('Error','Opps, New Loan Cannot Be Added!');
            return redirect()->route('loan.index');
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
        // $item = Loan::findOrFail($id);

        // return view('pages.admin.loan.edit', [
        //     'item' => $item,
        //     'title' => 'LOAN',
        // ]);
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
        $item = Loan::findOrFail($id);
        $item->update([
            'keadaan' => 'Dikembalikan'
        ]);
        
        $item->book->where('id', $item->book->id)->update(['jumlah' => ($item->book->jumlah + 1),]);

        if($item) {
            alert()->success('Success', 'Loan Has Been Updated!');
            return redirect()->route('loan.index')->with('edit', 'Loan Has Been Updated!');
        }
            alert()->error('Error','Opps, Loan Cannot Be Updated!');
            return redirect()->route('loan.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Loan::findOrFail($id);
        
        $delete = $item->delete();
        if ($delete) {
            alert()->success('Success','Loan Has Been Deleted!');
            return redirect()->route('loan.index')->with('delete', 'Loan Has Been Deleted!');
        }
        alert()->error('Error','Opps, Loan Cannot Be Deleted!');
        return redirect()->route('loan.index');
    }

    // public function kembalikan($id)
    // {
    //     $item = Loan::findOrFail($id)->update([
    //         'keadaan' => 'Dikembalikan'
    //     ]);
    //     $item->book->where('id', $item->book->id)->update(['jumlah' => ($item->book->jumlah + 1),]);

    //     if($item) {
    //         alert()->success('Success', 'Loan Has Been Updated!');
    //         return redirect()->route('loan.index')->with('edit', 'Loan Has Been Updated!');
    //     }
    //         alert()->error('Error','Opps, Loan Cannot Be Updated!');
    //         return redirect()->route('loan.index');
    // }

}