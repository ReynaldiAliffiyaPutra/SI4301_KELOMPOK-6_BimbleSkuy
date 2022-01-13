<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajarModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pengajar';
    protected $primaryKey = 'id_pengajar';
    public $timestamps = false;
    protected $fillable = ['nama', 'tamatan', 'umur', 'keahlian', 'profile'];
}
