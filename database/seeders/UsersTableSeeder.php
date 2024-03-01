<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new User();
        $usuario->name = 'Christian';
        $usuario->email = 'cmilanesr@alumnos.nebrija.es';
        $usuario->password = Hash::make('cmilanesr7101'); // Recuerda siempre cifrar la contraseña
        $usuario->save();
    }
}