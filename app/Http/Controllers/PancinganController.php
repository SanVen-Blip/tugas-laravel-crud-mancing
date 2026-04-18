<?php

namespace App\Http\Controllers;

use App\Models\pancingan;
use Illuminate\Http\Request;

class PancinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $pancingans = pancingan::all();
    return view('pancingan.index', compact('pancingans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pancingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'spesies_ikan' => 'required',
            'berat_kg' => 'required|numeric',
            'lokasi_mancing' => 'required',
            'umpan' => 'required',
        ]);

        pancingan::create($request->all());

        return redirect()->route('pancingans.index')
                         ->with('success', 'Data pancingan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pancingan $pancingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pancingan $pancingan)
    {
        $ikan = pancingan::find($pancingan->id);
        if ($ikan) {
            return view('pancingan.edit', compact('ikan'));
        } else {
            return redirect()->route('pancingans.index')
                             ->with('error', 'Data pancingan tidak ditemukan.');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pancingan $pancingan)
    {
        $ikan = pancingan::find($pancingan->id);
        if ($ikan) {
            $request->validate([
                'spesies_ikan' => 'required',
                'berat_kg' => 'required|numeric',
                'lokasi_mancing' => 'required',
                'umpan' => 'required',
            ]);
            $ikan->update($request->all());
            return redirect()->route('pancingans.index')
                             ->with('success', 'Data pancingan berhasil diperbarui.');
        } else {
            return redirect()->route('pancingans.index')
                             ->with('error', 'Data pancingan tidak ditemukan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pancingan $pancingan)
    {
        $ikan = pancingan::find($pancingan->id);
        if ($ikan) {
            $ikan->delete();
            return redirect()->route('pancingans.index')
                             ->with('success', 'Data pancingan berhasil dihapus.');
        } else {
            return redirect()->route('pancingans.index')
                             ->with('error', 'Data pancingan tidak ditemukan.');
        }

    }
}
