<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ticketOfficeController extends Controller
{
    public function checkPass(Request $request)
    {
        return Redirect::route('loginError', ['error' => "2"]);
    }
}
