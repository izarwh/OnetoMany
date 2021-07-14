<?php

namespace App\Exports;


use App\Models\Desa;
use App\Models\Provinsi;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class DesaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Desa::with('kecamatan')->get();
        // return Provinsi::with('kota')->get();
        $data = DB::table('desa')
        ->join('kecamatan','kecamatan.kecamatan_id','=','desa.kecamatan_id')
        ->join('kota','kota.kota_id','=','kecamatan.kota_id')
        ->join('provinsi','provinsi.provinsi_id','=','kota.provinsi_id')
        // ->select('desa.nama','kecamatan.nama','kota.nama','provinsi.nama')
        // ->get(['desa.nama','kecamatan.nama','kota.nama','provinsi.nama']);
        ->get();
        return $data;

        // return Desa::all();
    }
}
