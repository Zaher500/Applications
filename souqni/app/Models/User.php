<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable; // ← مهم جداً
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements AuthenticatableContract
{
    use Notifiable;
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
