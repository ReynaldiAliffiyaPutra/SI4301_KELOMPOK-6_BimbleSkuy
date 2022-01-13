<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    use HasFactory;

    protected $table = 'tb_payment';
    protected $primaryKey = 'id_payment';
    protected $fillable = ['id_user', 'nominal', 'metode_pembayaran', 'kode_pembayaran', 'created_at'. 'updated_at'];
}
