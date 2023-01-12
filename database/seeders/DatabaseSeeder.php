<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            PermissionRoleSeeder::class,
            AeroportoSeeder::class,
            PercursoSeeder::class,
            AeroportoPercursoSeeder::class,
            AeronaveSeeder::class,
            RegaliaSeeder::class,
            TarifaSeeder::class,
            RegaliaTarifaSeeder::class,
            CabineSeeder::class,
            MoradaSeeder::class,
            PreferenciaSeeder::class,
            MembroSeeder::class,
            VooSeeder::class,
            VooTarifaSeeder::class,
            //ClienteSeeder::class,
            //CompraSeeder::class,
            //AnuncioSeeder::class,
            //BilheteSeeder::class,
            
           
          
           
            
           
           
        ]);
    }
}
