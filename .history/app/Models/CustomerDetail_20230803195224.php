<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;
    protected $fillable
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
