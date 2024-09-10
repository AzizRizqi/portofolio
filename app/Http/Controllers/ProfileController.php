<?php

namespace App\Http\Controllers;


use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile = Profile::get();
        return view('profile.create', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasfile('gambar')) {
            $gambar = $request->file('gambar');
            $path = $gambar->store('public/images');
            $name = basename($path); //menyimpan nama file saja
        }
        Profile::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'gambar' => $name,
            'deskripsi' => $request->deskripsi,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasfile('gambar')) {
            $gambar = $request->gambar->store('images', 'public');
        }
        Profile::where('id', $id)->update([
            'nama' => $request->nama,
            'gambar' => $gambar,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect()->to('profile')->with('success', 'profile berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        $profile->delete();
        return redirect()->to('profile')->with('message', 'profile berhasil di hapus');
    }








    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors('gagal. Mohon periksa kembali email dan password anda!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
