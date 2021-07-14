<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table='kota';
    //menghapus timestamps
    public $timestamps = FALSE;
    //menentukan column mana yang dapat digunakan untuk create
    protected $fillable = ['nama','provinsi_id'];
    //mengganti default find yang mencari id menjadi custom id
    protected $primaryKey = 'kota_id';

    public function provinsi(){
        return $this->belongsTo('App\Models\Provinsi','provinsi_id','provinsi_id');
    }

    public function kecamatan(){
        return $this->hasMany('App\Models\Kecamatan');
    }
}
