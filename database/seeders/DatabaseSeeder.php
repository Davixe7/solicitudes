<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $role_normal  = Role::create(['name' => 'Normal']);
        $role_tecnico = Role::create(['name' => 'Tecnico']);

        $tecnico = \App\Models\User::factory()->create([
            'name' => 'Técnico',
            'email' => 'tecnico@app.com',
            'password' => bcrypt(123456)
        ]);
        $tecnico->assignRole( $role_tecnico );

        $normal = \App\Models\User::factory()->create([
            'name' => 'Normal',
            'email' => 'normal@app.com',
            'password' => bcrypt(123456)
        ]);
        $normal->assignRole( $role_normal );
    }
}
