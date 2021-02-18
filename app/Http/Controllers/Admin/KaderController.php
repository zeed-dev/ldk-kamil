<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kader;
use Illuminate\Http\Request;

class KaderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:kader.index|kader.create|kader.edit|kader.delete']);
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
    }
}
