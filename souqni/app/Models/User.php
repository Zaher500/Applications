<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users'; // تحديد اسم الجدول

    protected $primaryKey = 'user_id'; // تحديد مفتاح الجدول الأساسي

    public $timestamps = false; // إذا لم يكن الجدول يحتوي على حقول created_at و updated_at

    protected $fillable = [
        'role_id',
        'user_name',
        'password',
        'email',
        'phone',
        'address',
    ];
}
