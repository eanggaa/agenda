@extends('layouts.admin')

@section('title', 'Edit Data Guru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('guru/'.$data->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-2">
                              <label class="form-label">Nama Guru</label>
                              <input type="text" class="form-control" name="guru" value="{{ $data->guru }}">
                              @foreach ($errors->get('guru') as $message)
                                  <p class="text-warning">{{ $message }}</p>
                              @endforeach
                            </div>
                            <div class="mb-2">
                              <label class="form-label">Mata Pelajaran</label>
                              <input type="text" class="form-control" name="matapelajaran" value="{{ $data->matapelajaran }}">
                              @foreach ($errors->get('matapelajaran') as $message)
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