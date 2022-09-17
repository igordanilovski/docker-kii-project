<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Places;

class RecordController extends Controller
{
    public function getRecords(Request $request)
    {
        if (isset($_GET["type"])) {
            return view("index")
                ->with("records", Places::where("amenity", $_GET["type"])->select("id", "name", "amenity", "lon")->get()->sortBy("lon", SORT_REGULAR, false))
                ->with("restaurantsNumber", Places::where("amenity", "restaurant")->count())
                ->with("totalNumber", Places::all()->count())
                ->with("pubNumber", Places::where("amenity", "pub")->count())
                ->with("cafeNumber", Places::where("amenity", "cafe")->count())
                ->with("barNumber", Places::where("amenity", "bar")->count())
                ->with("clubNumber", Places::where("amenity", "nightclub")->count())
                ->with("cinemaNumber", Places::where("amenity", "cinema")->count());
        } else if (isset($_GET["searchTerm"])) {
            return view("index")
                ->with("records", Places::where("name", 'like', '%' . $_GET["searchTerm"] . '%')
                    ->orWhere("name_en", 'like', '%' . $_GET["searchTerm"] . '%')
                    ->orWhere("name_mk", 'like', '%' . $_GET["searchTerm"] . '%')
                    ->select("id", "name", "amenity", "lon")->get()->sortBy("lon", SORT_REGULAR, false))
                ->with("restaurantsNumber", Places::where("amenity", "restaurant")->count())
                ->with("totalNumber", Places::all()->count())
                ->with("pubNumber", Places::where("amenity", "pub")->count())
                ->with("cafeNumber", Places::where("amenity", "cafe")->count())
                ->with("barNumber", Places::where("amenity", "bar")->count())
                ->with("clubNumber", Places::where("amenity", "nightclub")->count())
                ->with("cinemaNumber", Places::where("amenity", "cinema")->count());
        } else {
            return view("index")
                ->with("records", Places::all("id", "name", "amenity", "lon")->sortBy("lon", SORT_REGULAR, false))
                ->with("restaurantsNumber", Places::where("amenity", "restaurant")->count())
                ->with("totalNumber", Places::all()->count())
                ->with("pubNumber", Places::where("amenity", "pub")->count())
                ->with("cafeNumber", Places::where("amenity", "cafe")->count())
                ->with("barNumber", Places::where("amenity", "bar")->count())
                ->with("clubNumber", Places::where("amenity", "nightclub")->count())
                ->with("cinemaNumber", Places::where("amenity", "cinema")->count());
        }
    }

    public function getRecord($id)
    {
        $foundRecord = Places::find($id, ["name", "amenity", "website", "lon", "lat"]);

        if ($foundRecord == null) {
            return view("getRecord")->with("errorMessage", "Record Not Found");
        }

        return view("entity")
            ->with("id", $id)
            ->with("amenity", $foundRecord["amenity"])
            ->with("place", $foundRecord["name"])
            ->with("website", $foundRecord["website"])
            ->with("lat", $foundRecord["lat"])
            ->with("lon", $foundRecord["lon"]);
    }
}
