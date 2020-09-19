<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function get()
    {
        $service_ids = Auth::user()->subscriptions()->pluck('service_id');
        $services = Service::where('id', '<>', Service::CUSTOM)->whereNotIn('id', $service_ids)->get();
        return response()->json(['services' => $services]);
    }
}
