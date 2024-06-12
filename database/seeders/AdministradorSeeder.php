<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    public function run()
    {
        // Elimina todos los registros actuales
        DB::table('administradores')->delete();

        $administradores = [
            ['IDadministrador' => 1, 'Email' => 'marqueznicolle421@gmail.com', 'password' => '123456m'],
            ['IDadministrador' => 2, 'Email' => 'jnatsanchezrr@gmail.com', 'password' => 'chiquibarbie0212'],
            ['IDadministrador' => 3, 'Email' => 'cerikdamian@gmail.com', 'password' => 'erikdamiansalchipapa'],
            ['IDadministrador' => 4, 'Email' => 'mariotarara@gmail.com', 'password' => 'marioarroz'],
            ['IDadministrador' => 5, 'Email' => 'camilo1305@gmail.com', 'password' => 'camilo1305'],
        ];

        foreach ($administradores as $administrador) {
            DB::table('administradores')->insert([
                'IDadministrador' => $administrador['IDadministrador'],
                'Email' => $administrador['Email'],
                'password' => Hash::make($administrador['password']),
            ]);
        }
    }
}