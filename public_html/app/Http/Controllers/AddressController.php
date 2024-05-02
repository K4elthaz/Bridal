<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getMunicipalities(Request $request, $province_code)
    {
    	$municipalities = Municipality::where('province_code', $province_code)->orderBy('name', 'ASC')->get();

        return json_encode($municipalities);
    }

    public function getBarangays(Request $request, $municipality_code)
    {
    	$barangays = Barangay::where('city_and_municipality_code', $municipality_code)->orderBy('name', 'ASC')->get();

        return json_encode($barangays);
    }
}
