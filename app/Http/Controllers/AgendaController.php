<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Requests\AgendaRequest;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::with('guru', 'kelas')->simplepaginate(4);
        return view('agenda.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $kelas = Kelas::all();
        return view('agenda.tambah', compact('guru', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendaRequest $request)
    {
        $data = new Agenda;
        $data->guru_id = $request->guru_id;
        $data->matapelajaran_id = $request->matapelajaran_id;
        $data->materipelajaran = $request->materipelajaran;
        $data->kelas_id = $request->kelas_id;
        $data->jenispembelajaran = $request->jenispembelajaran;
        $data->linkpembelajaran = $request->linkpembelajaran;
        $data->absensi = $request->absensi;
        $data->keterangan = $request->keterangan;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;

        if($request->file('dokumentasi')){
            $file = $request->file('dokumentasi');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('dokumentasi', $filename);
            $data->dokumentasi = $filename;  
        }
        $data->save();

        if($request->has('user')){
            return redirect()->back()->with('success', 'data berhasil ditambahkan');
        }
        return redirect('agenda')->with('success', 'data berhasil ditambahkan');
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
        $kelas = Kelas::all();
        $data = Agenda::with('guru')->findorfail($id);
        return view('agenda.edit', compact('data', 'guru', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgendaRequest $request, $id)
    {
        $data = Agenda::findorfail($id);
        $data->guru_id = $request->guru_id;
        $data->matapelajaran_id = $request->matapelajaran_id;
        $data->materipelajaran = $request->materipelajaran;
        $data->kelas_id = $request->kelas_id;
        $data->jenispembelajaran = $request->jenispembelajaran;
        $data->linkpembelajaran = $request->linkpembelajaran;
        $data->absensi = $request->absensi;
        $data->keterangan = $request->keterangan;

        if($request->file('dokumentasi')){
            $file = $request->file('dokumentasi');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('dokumentasi', $filename);

            File::delete('dokumentasi', $data->dokumentasi);

            $data->dokumentasi = $filename;  
        }
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->save();

        return redirect('agenda')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Agenda::findorfail($id);
        $data->delete();

        return redirect('agenda')->with('success', 'data berhasil didelete');
    }
}
