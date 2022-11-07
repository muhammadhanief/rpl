<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Permintaan;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    //
    public function index()
    {
        return view('formulir');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'file_perminataan' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        //     'file_eselon' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        //     'file_pusdiklat' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        // ]);

        $file_permintaan = $request->file('file_permintaan');
        $file_eselon = $request->file('file_eselon');
        $file_pusdiklat = $request->file('file_pusdiklat');

        $nama_file_permintaan = time() . "_" . $file_permintaan->getClientOriginalName();
        $nama_file_eselon = time() . "_" . $file_eselon->getClientOriginalName();
        $nama_file_pusdiklat = time() . "_" . $file_pusdiklat->getClientOriginalName();

        $path_permintaan = 'data_file/permintaan';
        $path_eselon = 'data_file/eselon';
        $path_pusdiklat = 'data_file/pusdiklat';

        $file_permintaan->move($path_permintaan, $nama_file_permintaan);
        $file_eselon->move($path_eselon, $nama_file_eselon);
        $file_pusdiklat->move($path_pusdiklat, $nama_file_pusdiklat);

        Permintaan::create([
            'user_id' => Auth::user()->id,
            'permohonan_path' => $path_permintaan . '/' . $nama_file_permintaan,
            'eselon_path' => $path_eselon . '/' . $nama_file_eselon,
            'kepala_pusdiklat_path' => $path_pusdiklat . '/' . $nama_file_pusdiklat,
            'pengambilan' => $request->pengambilan,
            'alamat_pengambilan' => $request->alamat_pengambilan,
            'email_pengambilan' => $request->email_pengambilan,
            'status' => 1,
        ]);

        // dd($file_eselon);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
