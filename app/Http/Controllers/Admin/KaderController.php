<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:kader.index|kader.create|kader.edit|kader.delete|kader.show']);
    }

    public function index()
    {
        $kaders = Kader::latest()->when(request()->q, function ($kaders) {
            $kaders = $kaders->where('nama_lengkap', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.kader.index', compact('kaders'));
    }

    public function create()
    {
        return view('admin.kader.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap'          => 'required',
            'nama_panggilan'        => 'required',
            'angkatan'              => 'required',
            'program_studi'         => 'required',
            'semester'              => 'required',
            'kelas'                 => 'required',
            'photo'                 => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'tempat_tanggal_lahir'  => 'required',
            'alamat_asal'           => 'required',
            'alamat_sekarang'       => 'required',
            'murobi_id'             => 'nullable',
        ]);

        // dd($request->all());

        // upload photo
        $photo = $request->file('photo');
        $photo->storeAs('public/kaders', $photo->hashName());

        $kaders = Kader::create([
            'nama_lengkap'          => $request->input("nama_lengkap"),
            'nama_panggilan'        => $request->input("nama_panggilan"),
            'angkatan'              => $request->input("angkatan"),
            'program_studi'         => $request->input("program_studi"),
            'semester'              => $request->input("semester"),
            'kelas'                 => $request->input("kelas"),
            'photo'                 => $photo->hashName(),
            'tempat_tanggal_lahir'  => $request->input("tempat_tanggal_lahir"),
            'alamat_asal'           => $request->input("alamat_asal"),
            'alamat_sekarang'       => $request->input("alamat_sekarang"),
            'murobi_id'             => $request->input("murobi_id"),
        ]);

        if ($kaders) {
            return redirect()->route('admin.kader.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.kader.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($id)
    {
        $kaders = Kader::findOrFail($id);
        $photo = Storage::disk('local')->delete('public/kaders/' . $kaders->photo);
        $kaders->delete();

        if ($kaders) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
