<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    use HasFactory;

    protected $table = 'tb_history';
    protected $primaryKey = 'id_history';
    protected $fillable = ['id_user', 'id_pembelajaran', 'created_at', 'updated_at'];
}
