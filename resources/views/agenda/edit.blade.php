@extends('layouts.admin')

@section('title', 'Edit Data Agenda')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('agenda/'.$data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-2">
                              <label class="form-label">Nama Guru</label>
                              <select class="form-control" name="guru_id" id="guru_id">
                                <option value="{{ $data->guru_id }}">{{ $data->guru->guru }}</option>
                                @foreach ($guru as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->guru }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Mata Pelajaran</label>
                              <select class="form-control" name="matapelajaran_id" id="matapelajaran_id">
                                <option value="{{ $data->matapelajaran_id }}">{{ $data->guru->matapelajaran }}</option>
                                @foreach ($guru as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->matapelajaran }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Materi Pelajaran</label>
                              <input type="text" class="form-control" name="materipelajaran" value="{{ $data->materipelajaran }}">
                              @foreach ($errors->get('materipembelajaran') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Kelas</label>
                              <select class="form-control" name="kelas_id" id="kelas_id">
                                <option value="{{ $data->kelas_id }}">{{ $data->kelas->kelas }}</option>
                                @foreach ($kelas as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->kelas }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Jenis Pembelajaran</label>
                              <select class="form-control" name="jenispembelajaran">
                                <option selected>{{ $data->jenispembelajaran }}</option>
                                <option value="ptm">pembelajaran tatap muka</option>
                                <option value="pjj">pembelajaran jarak jauh</option>
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Link Pembelajaran</label>
                              <input type="text" class="form-control" name="linkpembelajaran" value="{{ $data->linkpembelajaran }}">
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Absensi</label>
                              <input type="text" class="form-control" name="absensi" value="{{ $data->absensi }}">
                              @foreach ($errors->get('absensi') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Keterangan</label>
                              <textarea type="text" class="form-control" name="keterangan">{{ $data->keterangan }}</textarea>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Dokumentasi</label>
                              <input type="file" class="form-control mb-2" name="dokumentasi" value="{{ $data->dokumentasi }}">
                              @foreach ($errors->get('dokumentasi') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                              @if(strlen($data->dokumentasi)>0)
                                {{ $data->dokumentasi }}
                              @endif
                            </div>
                            <div class="row mb-4">
                              <div class="col-md-6">
                                    <label class="form-label">Mulai</label>
                                    <input type="time" class="form-control" name="mulai" value="{{ $data->mulai }}">
                                    @foreach ($errors->get('mulai') as $message)
                                      <p class="text-warning">{{ $message }}</p>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Selesai</label>
                                    <input type="time" class="form-control" name="selesai" value="{{ $data->selesai }}">
                                    @foreach ($errors->get('selesai') as $message)
                                      <p class="text-warning">{{ $message }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection