<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'administrador',
            'estudiante pregrado',
            'estudiante posgrado',
            'docente pregrado',
            'docente posgrado',
            'egresado pregrado',
            'egresado posgrado',
            'administrativo',
            'invitado'
        ];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
