<?php

namespace App\Http\Controllers;

use App\Models\AkunRobloxModel;
use Illuminate\Http\Request;

class AkunRobloxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $akun = AkunRobloxModel::all();

    return view('akun_roblox.index', [
        'title' => 'Data Akun Roblox',
        'akun' => $akun
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'nama_akun' => 'required|string|max:255',
            'password_hash' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'catatan' => 'nullable|string',
        ]);

        try {
            AkunRobloxModel::create($request->all());
            return back()->with('success', 'Akun berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan akun.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id)
    {
        $akun = AkunRobloxModel::findOrFail($id);
        return response()->json($akun);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $akun = AkunRobloxModel::findOrFail($id);

        $request->validate([
            'nama_akun' => 'required|string|max:255',
            'password_hash' => 'required|string|max:255',
            'email' => 'nullable|email',
            'catatan' => 'nullable|string',
        ]);

        try {
            $akun->update($request->all());
            return back()->with('success', 'Akun berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui akun.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
    {
        try {
            AkunRobloxModel::destroy($id);
            return back()->with('success', 'Akun berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus akun.');
        }
    }
}
