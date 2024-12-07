@extends('layouts.app')

@section('title')
    Transaksi | Catshop Admin
@endsection
@section('content')
    <h3>Transaction</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/transaction/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                    <td>{{ $transaction->nama }}</td>
                    <td>{{ $transaction->kategori }}</td>
                    <td>{{ number_format($transaction->harga, 2) }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>
                        <!-- Tindakan untuk transaksi bisa ditambahkan di sini -->
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if (session('success'))  
    <div class="alert alert-success">  
        {{ session('success') }}  
    </div>  
@endif

@endsection
