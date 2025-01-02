<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunai;

class DonasiTunaiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:500',
            'amount' => 'required|numeric|min:1',
            'payment_option' => 'required|string|in:Gopay,Ovo,Dana',
        ]);

        Tunai::create([
            'nama' => $validated['name'],
            'pesan' => $validated['message'],
            'jumlah_donasi' => $validated['amount'],
            'opsi_pembayaran' => $validated['payment_option'],
        ]);
        return redirect()->back()->with('success', 'Terima kasih atas kebaikan anda hari ini..');
    }

    public function destroy($id)
    {
        $donasi = Tunai::findOrFail($id);
        $donasi->delete();

        return redirect()->route('list.donasi')->with('success', 'Donasi tunai berhasil dihapus.');
    }
    public function show($id)
    {
        $donasi = Tunai::findOrFail($id);
        return view('donasi.showtunai', compact('donasi'));
    }
}
