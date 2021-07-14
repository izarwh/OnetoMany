@extends('layouts.nav')
@section('title','Daftar Desa')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <a class="btn btn-light" href="{{ route('exportexcel') }}">Download Excel File</a>
    </div>
    <div class="col-sm-2">
      <a class="btn btn-light" href="{{  route('exportpdf') }}">Cetak PDF</a>
    </div>
  </div>
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Desa</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Kota</th>
          <th scope="col">Provinsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($desa as $data)
        <tr>
          <th scope="row">{{ $data->desa_id }}</th>
          <td>{{ $data->nama}}</td>
          <td>{{ $data->kecamatan->nama}}</td> 
          <td>{{ $data->kecamatan->kota->nama}}</td> 
          <td>{{ $data->kecamatan->kota->provinsi->nama}}</td> 
          {{-- id harus sama denganyang ada di route --}}
          <td><a href="{{ route('editdesa',['id' => $data->desa_id]) }}" class="btn btn-light">edit</a><a href="{{route('deletedesa',['id' => $data->desa_id])}}" class="btn btn-danger">hapus</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="d-flex justify-content-center">
      {{ $desa ->links('pagination::bootstrap-4') }}
    </div>
  </div>
  <div class="row">
    <a class="btn btn-success" href="{{ route('createdesa') }}">Tambah Desa</a>
  </div>
</div>
@endsection