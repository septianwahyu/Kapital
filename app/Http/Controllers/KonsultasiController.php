<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('konsultasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'fullname' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'phone' => 'required|numeric',
        //     'department' => 'required|min:1',
        //     'work_experience' => 'required',
        //     'education' => 'required',
        //     'psikologi_test' => 'required',
        //     'technical_test' => 'required',
        //     'age' => 'required',
        //     'toefl' => 'required',
        //     'gpa' => 'required',
        // ]);

        $pelamar = new Pelamar();
        $pelamar->nama = $request->fullname;
        $pelamar->email = $request->email;
        $pelamar->nohp = $request->phone;
        $pelamar->departemen = $request->department;
        $pelamar->k1_pengalaman = $request->work_experience;
        $pelamar->k2_pendidikan = $request->education;
        $pelamar->k3_psikologi = $request->psikologi_test;
        $pelamar->k4_keahlian = $request->technical_test;
        $pelamar->k5_umur = $request->age;
        $pelamar->k6_toefl = $request->toefl;
        $pelamar->k7_ipk = $request->gpa;
        $pelamar->rekomendasi = $request->rekomendasi;
        $pelamar->save();

        return redirect("konsultasi")->withSuccess('Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
