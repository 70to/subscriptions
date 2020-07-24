<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function get()
    {
        $services = Service::all();
        return response()->json(['services' => $services]);
    }

}
