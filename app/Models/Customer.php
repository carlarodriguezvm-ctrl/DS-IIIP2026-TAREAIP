<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Rental;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'phone_number', 'email', 'address'];

    public function rentals ()
    {
        return $this -> hasMany(Rental::class);
    }
}
