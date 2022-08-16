@extends('layouts.admin')

@section('title', 'Edit Data Kelas')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('kelas/'.$data->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-2">
                              <label class="form-label">Nama Guru</label>
                              <select class="form-control" name="teacher_id" id="teacher_id">
                                <option value="{{ $data->teacher_id }}">{{ $data->teacher->guru }}</option>
                                @foreach ($guru as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->guru }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-2">
                              <label class="form-label">kelas</label>
                              <input type="text" class="form-control" name="kelas" value="{{ $data->kelas }}">
                              @foreach ($errors->get('kelas') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection