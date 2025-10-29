<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        $user = User::factory()->create([
            'name' => 'Melisa',
            'email' => 'melisacocom590@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('Administrador');
    }
}
