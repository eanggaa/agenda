@extends('layouts.admin')

@section('title', 'Data Kelas')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                
                <div class="col-md-1">
                    <a href="{{ url('kelas/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i></a>
                </div>

                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table class="table mb-4">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" colspan="2">Option</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item => $dt)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $dt->teacher->guru }}</td>
                                    <td>{{ $dt->kelas }}</td>
                                    <td><a href="{{ url('kelas/'.$dt->id.'/edit') }}" type="button" class="btn btn-warning"><i class="fas fa-pen"></a></td>
                                    <td>
                                        <form action="{{ url('kelas/'.$dt->id) }}" method="POST">
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