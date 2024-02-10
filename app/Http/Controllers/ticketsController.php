<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function tickets_save(Request $request)
    {
        $datos = $request->input("tickets");
        dump($datos, $request->input("visitDate"));
        dump($request->input("franja"));
        // Creando instancias de clases
        //$tickets = new Tickets();
    }
    private function getTicketExtraData($id)
    {
        $data = array();
        switch ($id) {
            case "0":
                $data[] = "DISCAPACITADO";
                $data[] = 0.00;
                break;
            case "1":
                $data[] = "MENOR4";
                $data[] = 0.00;
                break;
            case "2":
                $data[] = "DESEMPLEADO";
                $data[] = 0.00;
                break;
            case "3":
                $data[] = "ENTRE4Y12";
                $data[] = 3.00;
                break;
            case "4":
                $data[] = "MAYOR65";
                $data[] = 3.00;
                break;
            case "5":
                $data[] = "ESTUDIANTE";
                $data[] = 3.00;
                break;
            case "6":
                $data[] = "PROFESOR";
                $data[] = 3.00;
                break;
            case "7":
                $data[] = "ADULTO";
                $data[] = 7.00;

                break;
        }
        return $data;
    }
}
