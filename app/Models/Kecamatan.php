<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table='kecamatan';
    //mneghapus timestamp
    public $timestamps = FALSE;
     //menentukan column mana yang dapat digunakan untuk create
    protected $fillable = ['nama','kota_id'];
     //mengganti default find yang mencari id menjadi custom id
    protected $primaryKey = 'kecamatan_id';

    public function kota(){
        return $this->belongsTo('App\Models\Kota','kota_id','kota_id');
    }

    public function desa(){
        return $this->hasMany('App\Models\Desa');
    }
}
