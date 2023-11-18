<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Alert;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pendaftaran = Pendaftaran::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pendaftaran = Pendaftaran::all();

        }
        
        return view('pendaftaran.index-pdt', ['data_pendaftaran' => $data_pendaftaran]);

    }
    public function create(Request $request)
    {
        // $request->validate([
        //     'pembelian_merchandise' => 'required|in:Ya,Tidak',
        //     // tambahkan validasi untuk kolom-kolom lainnya jika diperlukan
        // ]);
        // session()->flash('success', 'Data Berhasil di Submit');
        \App\Models\Pendaftaran::create($request->all());
        return redirect('/pendaftaran')->with('success','Data Berhasil ditambahkan');
    }
    public function edit($no_pendaftaran)
    {
        $pendaftaran= Pendaftaran::find($no_pendaftaran);

        $pendaftaran = \App\Models\Pendaftaran::where('no_pendaftaran', $no_pendaftaran)->first();
        if (!$pendaftaran) {
            // Handle kasus jika data pendaftaran tidak ditemukan
            abort(404); // Menampilkan halaman 404 Not Found
        }
        return view('pendaftaran/edit', compact('pendaftaran'));
    }
    public function update(Request $request, $no_pendaftaran)
    {
        $pendaftaran=Pendaftaran::find($no_pendaftaran);
        $pendaftaran->update($request->all());
        return redirect('/pendaftaran')->with('success','Data Berhasil diupdate');

    }
    public function delete($no_pendaftaran)
    {
        $pendaftaran= Pendaftaran::find($no_pendaftaran);
        $pendaftaran->delete($pendaftaran);
        return redirect ('/pendaftaran')->with('success','Data Berhasil dihapus');
    }
}
