<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Progetto;
use Illuminate\Http\Request;

class ProgettoController extends Controller
{
    public function index()
    {
        $progetti = Progetto::with('type', 'technologies')->paginate(3);
        return response()->json([
            'success' => true,
            'results' => $progetti


        ]);

    }

    public function show($slug)
    {
        $progetto = Progetto::where('slug', $slug)->with('type', 'technologies')->first();
        return response()->json([
            'succes' => true,
            'progetto' => $progetto
        ]);

    }
}