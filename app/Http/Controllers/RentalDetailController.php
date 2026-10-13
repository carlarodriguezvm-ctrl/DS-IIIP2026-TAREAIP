<?php

namespace App\Http\Controllers;

use App\Models\RentalDetail;
use Illuminate\Http\Request;

class RentalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentaldetail = RentalDetail::all();
        return dd($rentaldetail);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RentalDetail $rentalDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RentalDetail $rentalDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RentalDetail $rentalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RentalDetail $rentalDetail)
    {
        //
    }
}
