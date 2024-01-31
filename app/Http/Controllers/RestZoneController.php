<?php

namespace App\Http\Controllers;

use App\Models\RestZone;
use Illuminate\Http\Request;

class RestZoneController extends Controller
{
    public function index()
    {
        $rest_zones = RestZone::all();
        return view('restzone.index', compact('rest_zones'));
    }

    public function show(RestZone $rest_zone)
    {
        return view('restzone.show', compact('rest_zone'));
    }
}
