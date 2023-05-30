<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Progetto;
use Illuminate\Http\Request;

class ProgettoController extends Controller
{
    public function index()
    {
        $progetti = Progetto::with('type', 'technologies')->get();
        return response()->json([
            'success' => true,
            'results' => $progetti


        ]);

    }
}