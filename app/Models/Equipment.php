<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\RentalDetail;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'equipment_code', 'description', 'brand', 'daily_rental_price', 'status'];

    public function categories ()
    {
        return $this->belongsTo(Category::class); 
    }
    
    public function rental_details ()
    {
        return $this ->hasMany(RentalDetail::class);
    }

}
