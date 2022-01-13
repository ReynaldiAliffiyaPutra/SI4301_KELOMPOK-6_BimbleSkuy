<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackModel extends Model
{
    use HasFactory;

    protected $table = 'tb_feedback';
    protected $primaryKey = 'id_feedback';
    protected $fillable = ['name', 'feedback', 'created_at', 'updated_at'];
}
