<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Murobbi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MurobbiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['permission:murobi.index|murobi.create|murobi.edit|murobi.delete|murobi.show']);
    }


    public function index()
    {
        $murobbis = Murobbi::latest()->when(request()->q, function ($murobbis) {
            $murobbis = $murobbis->where('nama_lengkap', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.murobbi.index', compact('murobbis'));
    }

    public function create()
    {
        return view('admin.murobbi.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap'          => 'required',
            'nama_panggilan'        => 'required',
            'angkatan'              => 'required',
            'program_studi'         => 'required',
            'semester'              => 'required',
            'photo'                 => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'tempat_tanggal_lahir'  => 'required',
            'alamat_asal'           => 'required',
            'alamat_sekarang'       => 'required',
        ]);

        // dd($request->all());

        // upload photo
        $photo = $request->file('photo');
        $photo->storeAs('public/murobbis', $photo->hashName());

        $murobbis = Murobbi::create([
            'nama_lengkap'          => $request->input("nama_lengkap"),
            'nama_panggilan'        => $request->input("nama_panggilan"),
            'angkatan'              => $request->input("angkatan"),
            'program_studi'         => $request->input("program_studi"),
            'semester'              => $request->input("semester"),
            'photo'                 => $photo->hashName(),
            'tempat_tanggal_lahir'  => $request->input("tempat_tanggal_lahir"),
            'alamat_asal'           => $request->input("alamat_asal"),
            'alamat_sekarang'       => $request->input("alamat_sekarang"),
        ]);

        if ($murobbis) {
            return redirect()->route('admin.murobbi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.murobbi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Murobbi $murobbi)
    {
        return view('admin.murobbi.show', compact('murobbi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Murobbi $murobbi)
    {
        return view('admin.murobbi.edit', compact('murobbi'));
    }

    public function update(Request $request, Murobbi $murobbi)
    {
        // dd($request->all());

        $this->validate($request, [
            'nama_lengkap'          => 'required',
            'nama_panggilan'        => 'required',
            'angkatan'              => 'required',
            'program_studi'         => 'required',
            'semester'              => 'required',
            'photo'                 => 'image|mimes:jpeg,jpg,png|max:2000',
            'tempat_tanggal_lahir'  => 'required',
            'alamat_asal'           => 'required',
            'alamat_sekarang'       => 'required',
        ]);


        if ($request->file('photo') == "") {
            $murobbi = Murobbi::findOrfail($murobbi->id);
            $murobbi->update([
                'nama_lengkap'          => $request->input("nama_lengkap"),
                'nama_panggilan'        => $request->input("nama_panggilan"),
                'angkatan'              => $request->input("angkatan"),
                'program_studi'         => $request->input("program_studi"),
                'semester'              => $request->input("semester"),
                'tempat_tanggal_lahir'  => $request->input("tempat_tanggal_lahir"),
                'alamat_asal'           => $request->input("alamat_asal"),
                'alamat_sekarang'       => $request->input("alamat_sekarang"),
            ]);
        } else {
            // Remove Image
            Storage::disk('local')->delete('public/murrobbis/' . $murobbi->photo);

            // Upload New Image
            $photo = $request->file('photo');
            $photo->storeAs('public/murrobbis', $photo->hashName());

            $murobbi = Murobbi::findOrFail($murobbi->id);
            $murobbi->update([
                'nama_lengkap'          => $request->input("nama_lengkap"),
                'nama_panggilan'        => $request->input("nama_panggilan"),
                'angkatan'              => $request->input("angkatan"),
                'program_studi'         => $request->input("program_studi"),
                'semester'              => $request->input("semester"),
                'photo'                 => $photo->hashName(),
                'tempat_tanggal_lahir'  => $request->input("tempat_tanggal_lahir"),
                'alamat_asal'           => $request->input("alamat_asal"),
                'alamat_sekarang'       => $request->input("alamat_sekarang"),
            ]);
        }

        if ($murobbi) {
            return redirect()->route('admin.murobbi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('admin.murobbi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }



    public function destroy($id)
    {
        $murobbis = Murobbi::findOrFail($id);
        $photo = Storage::disk('local')->delete('public/murobbis/' . $murobbis->photo);
        $murobbis->delete();

        if ($murobbis) {
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
