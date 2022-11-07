<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Permohonan;

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
        $validate = $request->validate([
            'user_id' => '',
            'file_permohonan' => 'required|mimes:pdf',
            'file_eselon' => 'required|mimes:pdf',
            'file_pusdiklat' => 'required|mimes:pdf',
            'pengambilan' => 'required',
            'alamat_pengambilan' => 'nullable',
            'email_pengambilan' => 'nullable',
            'status' => '',
        ]);

        $validate['user_id'] = Auth::user()->id;
        $validate['file_permohonan'] = $request->file('file_permohonan')->store('permohonan');
        $validate['file_eselon'] = $request->file('file_eselon')->store('eselon');
        $validate['file_pusdiklat'] = $request->file('file_pusdiklat')->store('pusdiklat');
        $validate['status'] = 1;

        Permohonan::create($validate);


        // $file_permohonan = $request->file('file_permohonan');
        // $file_eselon = $request->file('file_eselon');
        // $file_pusdiklat = $request->file('file_pusdiklat');

        // $nama_file_permohonan = time() . "_" . $file_permohonan->getClientOriginalName();
        // $nama_file_eselon = time() . "_" . $file_eselon->getClientOriginalName();
        // $nama_file_pusdiklat = time() . "_" . $file_pusdiklat->getClientOriginalName();

        // $path_permohonan = 'permohonan/permohonan';
        // $path_eselon = 'permohonan/eselon';
        // $path_pusdiklat = 'permohonan/pusdiklat';

        // $file_permohonan->move($path_permohonan, $nama_file_permohonan);
        // $file_eselon->move($path_eselon, $nama_file_eselon);
        // $file_pusdiklat->move($path_pusdiklat, $nama_file_pusdiklat);

        // permohonan::create([
        //     'user_id' => Auth::user()->id,
        //     'permohonan_path' => $path_permohonan . '/' . $nama_file_permohonan,
        //     'eselon_path' => $path_eselon . '/' . $nama_file_eselon,
        //     'pusdiklat_path' => $path_pusdiklat . '/' . $nama_file_pusdiklat,
        //     'pengambilan' => $request->pengambilan,
        //     'alamat_pengambilan' => $request->alamat_pengambilan,
        //     'email_pengambilan' => $request->email_pengambilan,
        //     'status' => 1,
        // ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
