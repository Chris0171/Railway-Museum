<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketsController extends Controller
{
    public function tickets_save(Request $request)
    {
        // Obtener datos del cliente
        $data = $request->input("tickets");
        $errors = [];

        // Manejo de errores en la inserción
        try {
            request()->validate([
                "visitDate" => "required|date",
            ]);

            // Establecer reglas comunes de validación para cada elemento
            $rules = [
                "name" => "required|string|max:150",
                "dni" => "required|string|max:25",
                "email" => "required|string|max:255",
                "ticketType" => "required|integer",
            ];

            // Recorrer todos los datos
            foreach ($data as $elem) {
                $validator = Validator::make($elem, $rules);
                if ($validator->fails()) {
                    $errors[] = $validator->errors()->toArray();
                } else {
                    // Creando instancias de clases
                    $tickets = new Tickets();
                    $tickets->visitorFullName = $data[0]["name"];
                    $tickets->dateOfVisit = $request->input("visitDate");
                    $tickets->tycketType = $this->getTicketExtraData($data[0]["ticketType"])[0];
                    $tickets->documentNumber = $data[0]["dni"];
                    $tickets->email = $data[0]["email"];
                    $tickets->price = $this->getTicketExtraData($data[0]["ticketType"])[1];
                    $tickets->save();
                }
            }
        } catch (\Exception $e) {
            // Enviar los errores de var
            return response()->json(["error" => $e->getMessage(), $errors], 500);
        }
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
