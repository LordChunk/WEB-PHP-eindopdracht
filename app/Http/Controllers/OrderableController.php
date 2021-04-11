<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Festival;
use Illuminate\Routing\Controller as BaseController;

class OrderableController extends BaseController
{
    public function index()
    {
        $festivals = Festival::all();
        $cinemas = Cinema::all();

        return View('orderables.index', compact('festivals', 'cinemas'));
    }
}
