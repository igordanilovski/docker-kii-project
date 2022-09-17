<?php

namespace App\Http\Controllers;

use App\Models\ReportedPlaces;
use Illuminate\Http\Request;

class ReportPlaceController extends Controller
{
    public function store(Request $request)
    {
        $placeToReport = new ReportedPlaces();
        $placeToReport->place_id = $request->place_id;
        $placeToReport->save();
    }
}
