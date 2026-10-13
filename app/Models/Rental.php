<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\RentalDetail;
use App\Models\Customer;
use App\Models\Employee;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'employee_id', 'request_date', 'start_date', 'end_date', 'status'];

    public function rentalDetails ()
    {
        return $this->hasMany(RentalDetail::class);  
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}