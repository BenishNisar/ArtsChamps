<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_holder_name', 'card_number', 'expiration_date', 'order_id',
    ];

    public function billing()
    {
        return $this->belongsTo(Billing::class, 'order_id', 'id');
    }
}
