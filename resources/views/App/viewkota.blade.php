@extends('layouts.nav')
@section('title','Daftar Kota')
@section('content')

<div class="container">
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Kota</th>
          <th scope="col">Provinsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($kota as $data)
        <tr>
          <th scope="row">{{ $data->kota_id }}</th>
          <td>{{ $data->nama}}</td>
          <td>{{ $data->provinsi->nama}}</td> 
          {{-- id harus sama denganyang ada di route --}}
          {{-- <td><a href="{{route('edit',['id' => $data -> id])}}" class="btn btn-light">edit</a><a href="{{route('delete',['id' => $data -> id])}}" class="btn btn-danger">hapus</a></td> --}}
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="d-flex justify-content-center">
      {{ $kota ->links('pagination::bootstrap-4') }}
    </div>
  </div>
</div>
@endsection