<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TransactionController extends Controller
{
    public function cetak(){

        $transaction = Transaction::all();
        $pdf = Pdf::loadView('transaction.transaction-cetak', compact('transaction'));
        return $pdf->download('laporan-transaksi.pdf');
    }

    
    public function store(Request $request)  
    {  
        // Validasi data input  
        $validatedData = $request->validate([  
            'nama' => 'required|string|max:255',  
            'nomorhp' => 'required|string|max:15',  
            'alamat' => 'required|string|max:255',  
            'kategori' => 'required|string|max:50',  
            'harga' => 'required|numeric',  
        ]);  

        // Simpan data ke dalam tabel transactions  
        Transaction::create($validatedData);  

        // Redirect ke halaman transaksi dengan pesan success  
        return redirect()->route('transaction.transaction')->with('success', 'Pembelian berhasil.');  
    }  

    public function index()  
    {  
        $transactions = Transaction::all();  
        return view('transaction.transaction', compact('transactions'));  
    }  

}
