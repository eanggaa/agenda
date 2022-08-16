@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-2">Agenda Guru</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ url('agenda') }}" class="btn btn-primary">go there</a>
      </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-2">Data Guru</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ url('guru') }}" class="btn btn-primary">go there</a>
      </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-2">Data Kelas</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ url('kelas') }}" class="btn btn-primary">go there</a>
      </div>
    </div>
</div>
@endsection