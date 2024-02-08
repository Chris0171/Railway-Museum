<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function tickets_save(Request $request)
    {
        $datos = $request->input("tickets");
        dump($datos);
        // Creando instancias de clases
        //$tickets = new Tickets();
    }
}
