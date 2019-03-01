@extends('mahasiswa.layout')

@section('content')
  <div class="row">
    <div class="pull-left">
      <h2>Data Mahasiswa</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <td>No</td>
      <td>NIK</td>
      <td>Name</td>
      <th width="280px">Action</th>
    </tr>
    <?php
      $i=0
    ?>
    @foreach ($mahasiswa as $student) 
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->nik }}</td>
        <td>{{ $student->nama }}</td>
        <td>
          <form action="{{ route('mahasiswa.destroy', $student->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('mahasiswa.show', $student->id) }}">Detail</a>
            <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $student->id) }}">Edit</a>
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach

  </table>

@endsection