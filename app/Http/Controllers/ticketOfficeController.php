<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ticketOfficeController extends Controller
{
    public function checkPass(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Verificar las credenciales
        if (Auth::attempt($credentials)) {
            // La contraseña es correcta, el usuario está autenticado
            return redirect()->route('ticketOffice'); // Cambia 'dashboard' por la ruta a la que quieres redirigir
        } else {
            // La contraseña es incorrecta
            return Redirect::route('loginError', ['error' => "2"]); // Redirigir de vuelta con un mensaje de error
        }
    }
}