<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    //menghapus timestamps
    public $timestamps = FALSE;
    //menentukan column mana yang dapat digunakan untuk create
    protected $fillable = ['nama'];
    //mengganti default find yang mencari id menjadi custom id
    protected $primaryKey = 'provinsi_id';
    
    public function kota(){
        return $this->hasMany('App\Models\Kota');
    }
}
