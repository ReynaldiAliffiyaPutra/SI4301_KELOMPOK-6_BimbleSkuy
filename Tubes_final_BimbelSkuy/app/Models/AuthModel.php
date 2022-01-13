<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['username', 'email', 'password', 'full_name', 'sekolah', 'hp', 'status', 'created_at'. 'updated_at'];
}
