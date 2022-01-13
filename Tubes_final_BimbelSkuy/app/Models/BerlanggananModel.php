<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerlanggananModel extends Model
{
    use HasFactory;

    protected $table = 'tb_berlangganan';
    protected $primaryKey = 'id_payment';
    public $timestamps = false;
    protected $fillable = ['id_user', 'paket', 'start', 'end'];
}
