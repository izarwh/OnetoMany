<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    //mneghapus timestamp
    public $timestamps = FALSE;
    //memilih table yang dioperasikan menggunakan eloquent
    protected $table = 'desa';
    //menentukan column mana yang dapat digunakan untuk create
    protected $fillable = ['nama','kecamatan_id'];
    //mengganti default find yang mencari id menjadi custom id
    protected $primaryKey = 'desa_id';

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan','kecamatan_id','kecamatan_id');
    }
}
