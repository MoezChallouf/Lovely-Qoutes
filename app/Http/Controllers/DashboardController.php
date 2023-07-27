<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

//        dump(Idea::all());

        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at','DESC')->paginate(5)
        ]);

    }
}
