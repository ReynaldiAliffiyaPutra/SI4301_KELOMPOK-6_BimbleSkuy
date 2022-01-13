<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelajaranModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pembelajaran';
    protected $primaryKey = 'id_pembelajaran';
    public $timestamps = false;
    protected $fillable = ['title', 'cover', 'kategori', 'paket', 'materi'];
}
