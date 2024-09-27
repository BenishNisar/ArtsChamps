<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    use HasFactory;

    protected $table = 'notification'; // Specify the table name
    protected $fillable = ['user_id', 'type', 'message', 'is_read', 'created_at']; // Ensure all fields you want to mass assign are listed here
}
