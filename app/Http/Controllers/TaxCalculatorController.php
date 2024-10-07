<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tax_relief;
use App\Models\tax_rates;

class TaxCalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $getyears = tax_rates::all();
        $getyears = tax_rates::select('year')->distinct()->orderBy('year', 'asc')->get();
        $year = $request->year ? : $getyears->first()->year;

        $taxcalc = tax_relief::where('year',$year)->first();

        return view('Tax.index',compact('taxcalc','getyears','year'));
    }


    //////////////////////////////////////////////////

    public function adminPage(Request $request)
    {
        // Fetch all data from tax_rates table
        $taxRates = tax_rates::all();
        
        // Pass the data to the view
        return view('Tax.admin-page', compact('taxRates'));
    }

    public function store(Request $request)
{
    try {
        $taxRate = tax_rates::create($request->all());
        return redirect()->route('admin.page')->with('success', 'Tax rate added successfully!');
    } catch (\Exception $e) {
        return redirect()->route('admin.page')->with('error', 'Failed to add tax rate!');
    }
}

public function update(Request $request, $id)
{
    try {
        $taxRate = tax_rates::findOrFail($id);
        $taxRate->update($request->all());
        return redirect()->route('admin.page')->with('success', 'Tax rate updated successfully!');
    } catch (\Exception $e) {
        return redirect()->route('admin.page')->with('error', 'Failed to update tax rate!');
    }
}

public function destroy($id)
{
    try {
        $taxRate = tax_rates::findOrFail($id);
        $taxRate->delete();
        return redirect()->route('admin.page')->with('success', 'Tax rate deleted successfully!');
    } catch (\Exception $e) {
        return redirect()->route('admin.page')->with('error', 'Failed to delete tax rate!');
    }
}
    
    

//     public function index(Request $request)
// {
//     // Fetch distinct years from the tax_rates table
//     $getyears = tax_rates::select('year')->distinct()->orderBy('year', 'asc')->get();

//     // Set the default year if not provided
//     $year = $request->year ?: $getyears->first()->year;

//     // Fetch the tax rates for the selected year
//     $taxcalc = tax_rates::where('year', $year)->first();

//     return view('Tax.index', compact('taxcalc', 'getyears', 'year'));
// }

////////////////////////////////////////////////////////////////
    public function calculateTax(Request $request)
    {
        // Get the amount from the request
        $amount = $request->taxableincome;
        $years = $request->years;

        //CheckCategory
        $taxrates = tax_rates::where('chargeable_income_from','<=',$amount)
        ->where('chargeable_income_to','>=',$amount)
        ->where('year',$years)
        ->first();

        $balance = $amount - $taxrates->calculations_first; //hold 21000

        $firstamount = $taxrates->tax_from; // 3700
        $secondamount = $balance * ($taxrates->rate / 100);


        $incometax = $firstamount + $secondamount;


        // Return the calculated tax as JSON
        return response()->json(['incometax' => $incometax,'taxrates' => $taxrates]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

 
}
