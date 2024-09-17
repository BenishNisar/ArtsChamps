<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $table = "billing";
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'billing_country',
        'billing_state',
        'billing_zip',
        'billing_address',
        'billing_city',
        'total_amount',
        'created_at',
        'updated_at'
    ];

    public function cardDetails()
    {
        return $this->hasOne(CardDetails::class, 'order_id', 'id');
    }
}
