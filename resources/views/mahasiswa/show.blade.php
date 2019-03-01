@extends('mahasiswa.layout')

@section('content')
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Detail Mahasiswa</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}">Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>NIK:</strong>
        {{ $mahasiswa->nik }}
      </div>  
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Nama:</strong>
        {{ $mahasiswa->nama }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Address 1:</strong>
        {{ $mahasiswa->address1 }}
      </div>
    </div><div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>address 2:</strong>
        {{ $mahasiswa->address2 }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>address 3:</strong>
        {{ $mahasiswa->address3 }}
      </div>
    </div>
  </div>
@endsection