<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // 👈 ESTA LÍNEA ES LA CLAVE

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definir roles
        $roles = [
            'paciente',
            'Doctor',
            'Recepcionista',
            'Administrador',
        ];

        // Crear roles
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
            ]);
        }
    }
}
