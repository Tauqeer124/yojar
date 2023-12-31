<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'address', 'image','user_id','status'];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
    

}
