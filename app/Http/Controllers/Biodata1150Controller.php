<?php

namespace App\Http\Controllers;

use App\Models\Biodata1150;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Biodata1150Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodatas = Biodata1150::all();
        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
            'email' => 'required|email',
            'foto_profil' => 'nullable|image|mimes:jpeg,jpg,png,jfif,JPG,JPEG,PNG|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_profil')) {
            $data['foto_profil'] = $request->file('foto_profil')->store('profile_photos', 'public');
        }

        Biodata1150::create($data);

        return redirect()->route('biodata1150.index')->with('success', 'CV berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biodata1150 $biodata1150)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biodata1150 $biodata1150)
    {
        $biodata = $biodata1150;
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biodata1150 $biodata1150)
    {
       $request->validate([
            'nim' => 'required',
            'nama' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
            'email' => 'required|email',
            'foto_profil' => 'nullable|image|mimes:jpeg,jpg,png,jfif,JPG,JPEG,PNG|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_profil')) {
            if ($biodata1150->foto_profil) {
                Storage::disk('public')->delete($biodata1150->foto_profil);
            }
            $data['foto_profil'] = $request->file('foto_profil')->store('profile_photos', 'public');
        }

        $biodata1150->update($data);

        return redirect()->route('biodata1150.index')->with('success', 'Data CV berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biodata1150 $biodata1150)
    {
        if ($biodata1150->foto_profil) {
            Storage::disk('public')->delete($biodata1150->foto_profil);
        }

        $biodata1150->delete();

        return redirect()->route('biodata1150.index')->with('success', 'Data CV berhasil dihapus!');
    }

    // Fungsi khusus untuk menampilkan hasil CV berdasarkan ID
    public function showCv($id)
    {
        $biodata = Biodata1150::findOrFail($id);
        return view('cv', compact('biodata'));
    }
}
