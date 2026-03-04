<?php

namespace App\Http\Controllers;

use App\Models\Loan;
// use Illuminate\Http\Request;

class ActionController extends Controller
{
    

    public function approve(Loan $loan)
    {
        $loan->update(['status' => 'APPROVE']);
        return back()->with('success', 'Pinjaman disetujui');
    }

    public function reject(Loan $loan)
    {
        $loan->update(['status' => 'REJECT']);
        return back()->with('success', 'Pinjaman ditolak');
    }

    // public function approve($id)
    // {
    //     $loan = Loan::findorFaild($id);
    //     $loan->update(['status' => 'APPROVE']);
    //     return back()->with('success', 'Pinjaman telah disetujui');
    // }

    // public function reject($id)
    // {
    //     $loan = Loan::findorFaild($id);
    //     $loan->update(['status' => 'REJECT']);
    //     return back()->with('error', 'Pinjaman telah ditolak');
    // }
}
