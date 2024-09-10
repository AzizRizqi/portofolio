<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalaman = Experience::all();
        return view('pengalaman.index', compact('pengalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengalaman = Experience::all();
        return view('pengalaman.create',compact('pengalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'posisi' =>'required',
            'perusahaan' =>'required',
            'deskripsi' =>'required',
            'tahun' =>'required',
        ]);
        Experience::create([
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun,
        ]);
        return redirect()->route('pengalaman.index')->with('success', 'pengalaman berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengalaman = Experience::findOrFail($id);
        return view('pengalaman.edit', compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Experience::where('id',$id)->update([

            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun,
        ]);
        return redirect()->to('pengalaman')->with('success', 'pengalaman berhasi di tambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string  $id)
    {
        Experience::where('id',$id)->delete();
        return redirect()->route('pengalaman.index')->with('success', 'pengalaman berhasil di hapus');

    }
}
