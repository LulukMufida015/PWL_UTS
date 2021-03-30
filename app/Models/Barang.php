<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Barang extends Model
{
    use HasFactory;
    protected $table="barang"; // Eloquent akan membuat model barang menyimpan record di tabel barang
    public $timestamps= false; 
    protected  $primaryKey = 'id_barang'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'Kode_Barang',
        'Nama_Barang',
        'Kategori_Barang',
        'Harga',
        'QTY',
        ];
}
