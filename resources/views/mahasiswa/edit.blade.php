@extends('mahasiswa.layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Edit Data Mahasiswa</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}">Back</a>
      </div>
    </div>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problem with your input. <br><br>
      <ul>
        @foreach ($errors->all as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>NIK:</strong>
          <input type="number" name="nik" value="{{ $mahasiswa->nik }}" class="form-control" placeholder="NIK" readonly>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Nama:</strong>
          <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" placeholder="Nama">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Address 1:</strong>
          <input type="text" name="address1" value="{{ $mahasiswa->address1 }}" class="form-control" placeholder="Address 1">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Address 2:</strong>
          <input type="text" name="address2" value="{{ $mahasiswa->address2 }}" class="form-control" placeholder="Address 2">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Address 3:</strong>
          <input type="text" name="address3" value="{{ $mahasiswa->address3 }}" class="form-control" placeholder="Address 3">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </div>
  </form>
@endsection