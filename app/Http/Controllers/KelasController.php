<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Requests\KelasRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::with('teacher')->paginate(7);
        return view('kelas.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Guru::all();
        return view('kelas.tambah', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        $data = new Kelas;
        $data->teacher_id = $request->teacher_id;
        $data->kelas = $request->kelas;
        $data->save();

        return redirect('kelas')->with('success', 'data berhasil ditambahkan');
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
        $guru = Guru::all();
        $data = Kelas::with('teacher')->findorfail($id);
        return view('kelas.edit', compact('data', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KelasRequest $request, $id)
    {
        $data = Kelas::findorfail($id);
        $data->teacher_id = $request->teacher_id;
        $data->kelas = $request->kelas;
        $data->save();

        return redirect('kelas')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kelas::findorfail($id);
        $data->delete();

        return redirect('kelas')->with('success', 'data berhasil didelete');
    }
}
