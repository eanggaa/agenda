@extends('layouts.admin')

@section('title', 'Data Agenda')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <div class="col-md-1">
                    <a href="{{ url('agenda/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i></a>
                </div>

                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive mb-4">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Materi Pelajaran</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jenis Pembelajaran</th>
                                <th scope="col">Link Pembelajaran</th>
                                <th scope="col">Absensi</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Dokumentasi</th>
                                <th scope="col">Mulai</th>
                                <th scope="col">Selesai</th>
                                <th scope="col">Tanggal Input</th>
                                <th scope="col" colspan="2">Option</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item => $dt)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $dt->guru->guru }}</td>
                                    <td>{{ $dt->guru->matapelajaran }}</td>
                                    <td>{{ $dt->materipelajaran }}</td>
                                    <td>{{ $dt->kelas->kelas }}</td>
                                    <td>{{ $dt->jenispembelajaran }}</td>
                                    <td>{{ $dt->linkpembelajaran }}</td>
                                    <td>{{ $dt->absensi }}</td>
                                    <td>{{ $dt->keterangan }}</td>
                                    <td>
                                        <img src="{{ asset('dokumentasi/'.$dt->dokumentasi) }}" style="width: 80px">
                                    </td>
                                    <td>{{ $dt->mulai }}</td>
                                    <td>{{ $dt->selesai }}</td>
                                    <td>{{ $dt->created_at }}</td>
                                    <td><a href="{{ url('agenda/'.$dt->id.'/edit') }}" type="button" class="btn btn-warning"><i class="fas fa-pen"></a></td>
                                    <td>
                                        <form action="{{ url('agenda/'.$dt->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach
                            </tbody> 
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection