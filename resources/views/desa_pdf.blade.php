<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <a class="btn btn-light" href="{{ route('exportexcel') }}">Download Excel File</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-light" href="">Cetak PDF</a>
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
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <a class="btn btn-success" href="{{ route('createdesa') }}">Tambah Desa</a>
        </div>
      </div>
</body>
</html>