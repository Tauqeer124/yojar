<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country_name'];

    public function users()
    {
        return $this->hasMany(User::class,);
    }
    return $this->hasMany(Customer::class, 'country_id')
}
