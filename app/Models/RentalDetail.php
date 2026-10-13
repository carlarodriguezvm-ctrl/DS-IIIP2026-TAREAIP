<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Equipment;
use App\Models\Rental;

class RentalDetail extends Model
{
    use HasFactory;

    protected $fillable = ['rental_id', 'equipment_id', 'quantity'];

    public function equipment ()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function rental ()
    {
        return $this->belongsTo(Rental::class);
    }
}