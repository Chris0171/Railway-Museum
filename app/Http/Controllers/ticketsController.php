<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Redirect;

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
                "timeSlot" => "required|string"
            ]);

            // Establecer reglas comunes de validación para cada elemento
            $rules = [
                "name" => "required|string|max:150",
                "dni" => "required|string|max:25",
                "email" => "required|string|max:255",
                "ticketType" => "required|integer",
            ];
            $visitDate = $request->input("visitDate");
            $timeSlot = $request->input("timeSlot");

            // Recorrer todos los datos
            foreach ($data as $elem) {
                // Validar cada elemento del array
                $validator = Validator::make($elem, $rules);
                if ($validator->fails()) {
                    $errors[] = $validator->errors()->toArray();
                } else {
                    $ticketTypeEnum = $this->getTicketExtraData($data[0]["ticketType"])[0];
                    $price = $this->getTicketExtraData($data[0]["ticketType"])[1];
                    $ticketType = $this->getTicketExtraData($data[0]["ticketType"])[2];

                    // Creando instancias de clases
                    $this->sendQRCodeByEmail($data[0]["name"], $data[0]["dni"], $timeSlot, $request->input("visitDate"), $ticketType, $price);
                    $tickets = new Tickets();
                    $tickets->visitorFullName = $data[0]["name"];
                    $tickets->dateOfVisit = $visitDate;
                    $tickets->tycketType = $ticketTypeEnum;
                    $tickets->documentNumber = $data[0]["dni"];
                    $tickets->email = $data[0]["email"];
                    $tickets->price = $price;
                    $tickets->save();
                }
            }
        } catch (\Exception $e) {
            // Enviar los errores de var
            return response()->json(["error" => $e->getMessage(), $errors], 500);
        }
        return Redirect::route('buySuccess', ['success' => 1]);
    }
    private function getTicketExtraData($id)
    {
        $data = array();
        switch ($id) {
            case "0":
                $data[] = "DISCAPACITADO";
                $data[] = 0.00;
                $data[] = "Personas con discapacidad";
                break;
            case "1":
                $data[] = "MENOR4";
                $data[] = 0.00;
                $data[] = "Menores de cuatro años";
                break;
            case "2":
                $data[] = "DESEMPLEADO";
                $data[] = 0.00;
                $data[] = "Personas sin empleo";
                break;
            case "3":
                $data[] = "ENTRE4Y12";
                $data[] = 3.00;
                $data[] = "Menores entre 4 y 12 años";
                break;
            case "4":
                $data[] = "MAYOR65";
                $data[] = 3.00;
                $data[] = "Mayores de 65 años";
                break;
            case "5":
                $data[] = "ESTUDIANTE";
                $data[] = 3.00;
                $data[] = "Estudiantes";
                break;
            case "6":
                $data[] = "PROFESOR";
                $data[] = 3.00;
                $data[] = "Profesores";
                break;
            case "7":
                $data[] = "ADULTO";
                $data[] = 7.00;
                $data[] = "Adulto";
                break;
        }
        return $data;
    }
    private function sendQRCodeByEmail($name, $dni, $hour, $day, $ticketType, $price)
    {
        //Envía el correo electrónico con el contenido HTML de la card
        Mail::send([], [], function (Message $message) use ($name, $dni, $hour, $day, $ticketType, $price) {
            $message->to('christianmilanes01@gmail.com')
                ->subject('Código QR Adjunto')
                ->html($this->createCard($message, $name, $dni, $hour, $day, $ticketType, $price));
        });
    }
    private function createCard(Message $message, $name, $dni, $hour, $day, $ticketType, $price)
    {
        $url = 'https://www.simplesoftware.io/#/docs/simple-qrcode/es';

        return '
            <div
            style="
                display: flex;
                justify-content: center;
                padding: 15px;
                margin: 0;
                border-radius: 5px;
                border: 3px solid black;
                background-color: rgb(246, 246, 242);
                max-width: 580px;
            "
        >
            <div style="margin-right: auto">
                <h2 style="margin: 0">Museo del Ferrocarril</h2>
                <h4 style="margin-top: 2px">
                    Paseo de las delicias, 61, Arganzuela, 28045 Madrid
                </h4>
                <h4>Día de visita: ' . $day . '</h4>
                <h4>Franja horaria:' . $hour . '</h4>
                <div style="display: flex; margin-bottom: 12px">
                    <h4 style="margin: 0px;margin-right: 10px">Tipo de entrada: ' . $ticketType . '.</h4>
                    <h4 style="margin: 0px;">Precio: ' . $price . '.00€.</h4>
                </div>
                <div
                    style="
                        display: flex;
                        padding: 8px;
                        border-radius: 2px;
                        background-color: rgba(71, 161, 213, 0.3);
                    "
                >
                    <div style="margin-right: 30px;">
                        <h3 style="margin: 0px">Nombre:</h3>
                        <h4 style="margin: 0px">' . $name . '</h4>
                    </div>
                    <div>
                        <h3 style="margin: 0px">Documento de identificación:</h3>
                        <h4 style="margin: 0px">' . $dni . '</h4>
                    </div>
                </div>
            </div>
            <div>
                <div>
                <img src="' . $message->embedData(QrCode::format("png")->margin(1)->size(150)->generate($url), "QrCode.png", "image/png") . '">
                </div>
                <div style="margin-top: 4px">
                    <img style="width:150px;" src="' . $message->embedData(file_get_contents("images/Logo-Ticket.png"), "Logo.png", "image/png") . '">
                </div>
            </div>
        </div>';
    }
}
