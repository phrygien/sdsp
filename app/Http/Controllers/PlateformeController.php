<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlateformeController extends Controller
{
    /*
    * matriels page
    */
    public function materiele()
    {
        return view('plateformes.materiels.page');
    }
}
