@extends('layouts.nav')
@section('title','Edit Desa')
@section('content')

<div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif()

    <form action={{ route('updatedesa',['id'=>$desa->desa_id]) }} method="post">
        @csrf
        <div class="form-group">
            <label for="Nama">Nama Desa</label>
            <input class="form-control" id="namadesa" name="namadesa" placeholder="Nama desa" value={{ $desa->nama }}>
        </div>
        <div class="form-group">
            <label for="IDAtasan">Kecamatan</label>
            <select class="form-control" id="kecamatan_id" name="kecamatan_id">
                @foreach($kec as $kecamatan)
                <option value='{{ $kecamatan->kecamatan_id }}'>{{ $kecamatan->nama }}</option>
                @endforeach
                {{-- <option value>1</option> --}}
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection