@extends('layouts.admin')

@section('title', 'Tambah Data Agenda')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('agenda') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-2">
                              <label class="form-label">Nama Guru</label>
                              <select class="form-control" name="guru_id" id="guru_id">
                                <option disabled selected>Pilih Nama Guru</option>
                                @foreach ($guru as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->guru }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Mata Pelajaran</label>
                              <select class="form-control" name="matapelajaran_id" id="matapelajaran_id">
                                <option disabled selected>Pilih Mata Pelajaran</option>
                                @foreach ($guru as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->matapelajaran }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Materi Pelajaran</label>
                              <input type="text" class="form-control" name="materipelajaran">
                              @foreach ($errors->get('materipelajaran') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Kelas</label>
                              <select class="form-control" name="kelas_id" id="kelas_id">
                                <option disabled selected>Pilih Kelas</option>
                                @foreach ($kelas as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->kelas }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Jenis Pembelajaran</label>
                              <select class="form-control" name="jenispembelajaran">
                                <option disabled selected>Pilih Jenis Pembelajaran</option>
                                <option value="ptm">pembelajaran tatap muka</option>
                                <option value="pjj">pembelajaran jarak jauh</option>
                                @foreach ($errors->get('jenispembelajaran') as $message)
                                    <p class="text-warning">{{ $message }}</p>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Link Pembelajaran</label>
                              <input type="text" class="form-control" name="linkpembelajaran">
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Absensi</label>
                              <input type="text" class="form-control" name="absensi">
                              @foreach ($errors->get('absensi') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Keterangan</label>
                              <textarea type="text" class="form-control" name="keterangan"></textarea>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Dokumentasi</label>
                              <input type="file" class="form-control" name="dokumentasi">
                              @foreach ($errors->get('dokumentasi') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">Mulai</label>
                                    <input type="time" class="form-control" name="mulai">
                                    @foreach ($errors->get('mulai') as $message)
                                      <p class="text-warning">{{ $message }}</p>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Selesai</label>
                                    <input type="time" class="form-control" name="selesai">
                                    @foreach ($errors->get('selesai') as $message)
                                      <p class="text-warning">{{ $message }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="admin">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection