<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //

        return view('testing');
        // return('testing');
    }
}

// php artisan route:list --except-vendor
// php artisan route:list --path=user
