<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;

class TransaksiController extends Controller
{
    /**
     * Tampilkan detail transaksi.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pemesanan = Pemesanan::with('pembayaran')->findOrFail($id);
        
        return view('transaksi.show', compact('pemesanan'));
    }

    /**
     * Unduh transaksi dalam format PDF.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function downloadPdf($id)
    {
        $pemesanan = Pemesanan::with('pembayaran')->findOrFail($id);

        // Load view untuk PDF dengan data pemesanan
        $pdf = Pdf::loadView('pdf.transaksi', compact('pemesanan'))->setPaper('a4');

        // Unduh PDF dengan nama file berdasarkan ID pemesanan
        return $pdf->download('transaksi_' . $pemesanan->id . '.pdf');
    }
}