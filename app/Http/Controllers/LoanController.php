<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/user/loan/index', [
            'loans' => Loan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/user/loan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:50,',
            'tipe_pengajuan' => 'required|string|max:80',
            'pendapatan_bulanan_nasabah' => 'required|integer|min:999999',
            'nominal_pengajuan' => 'required|integer|max:201000000',
            'tenor' => 'required|integer|min:1|max:24',
            'tanggal_pengajuan' => 'required|string|max:50',
            'catatan' => 'required|string|max:255',
            'status' => 'nullable|string|max:30'
        ]);

        // $userId = auth()->id();
        $userId = Auth::id();
        $loanCount = Loan::where('user_id', $userId)->count();

        if($loanCount >= 3) {
            return back()->with('error', 'Pengajuan pinjaman anda ditolak, anda hanya dapat meminjam sebanyak 3 kali');
        }

        $pendapatanBulananNasabah = $request->pendapatan_bulanan_nasabah;

        if($pendapatanBulananNasabah <= 999999) 
        {
            return back()->with('error', 'Nasabah belum dapat mengajukan pinjaman');
        }

        $nominalPengajuan = $request->nominal_pengajuan;

        if($nominalPengajuan >= 201000000) 
        {
            return back()->with('error', 'Nasabah hanya dapat meminjam maksimal 200 juta');
        }
        
        $tenor = $request->tenor;
        $tagihanNasabah = $nominalPengajuan / $tenor;

        $validatedData['user_id'] = $userId;
        $validatedData['tagihan_nasabah'] = $tagihanNasabah;

        Loan::create($validatedData);
        return redirect('user/loan')->with('success', 'Pengajuan anda telah ditambahkan dan akan segera di proses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        return view('user/loan/show', [
            'loan' => $loan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        return view('user/loan/edit', [
            'loan' => $loan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:50,',
            'tipe_pengajuan' => 'required|string|max:80',
            'pendapatan_bulanan_nasabah' => 'required|integer|min:999999',
            'nominal_pengajuan' => 'required|integer|max:201000000',
            'tenor' => 'required|integer|min:1|max:24',
            'tanggal_pengajuan' => 'required|string|max:50',
            'catatan' => 'required|string|max:255',
            'status' => 'nullable|string|max:30'
        ]);


        $pendapatanBulananNasabah = $request->pendapatan_bulanan_nasabah;

        if($pendapatanBulananNasabah <= 999999) 
        {
            return back()->with('error', 'Nasabah belum dapat mengajukan pinjaman');
        }

        $nominalPengajuan = $request->nominal_pengajuan;

        if($nominalPengajuan >= 201000000) 
        {
            return back()->with('error', 'Nasabah hanya dapat meminjam maksimal 200 juta');
        }

        $tenor = $request->tenor;
        $tagihanNasabah = $nominalPengajuan / $tenor;
        $validatedData['tagihan_nasabah'] = $tagihanNasabah;
      
        Loan::where('id', $loan->id)->update($validatedData);
        return redirect('user/loan')->with('update', 'Data pinjaman anda berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        Loan::destroy($loan->id);
        return redirect('/user/loan')->with('success', 'Data pinjaman anda berhasil dihapus');
    }
}
