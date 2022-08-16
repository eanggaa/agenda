<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Requests\GuruRequest;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::paginate(7);
        return view('guru.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Guru;
        return view('guru.tambah', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuruRequest $request)
    {
        $data = new Guru;
        $data->guru = $request->guru;
        $data->matapelajaran = $request->matapelajaran;
        $data->save();

        return redirect('guru')->with('success', 'data berhasil ditambahkan');
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
        $data = Guru::findorfail($id);
        return view('guru.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuruRequest $request, $id)
    {
        $data = Guru::findorfail($id);
        $data->guru = $request->guru;
        $data->matapelajaran = $request->matapelajaran;
        $data->save();

        return redirect('guru')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::findorfail($id);
        $data->delete();

        return redirect('guru')->with('success', 'data berhasil didelete');
    }
}
