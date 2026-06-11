<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Empresa;
use App\Models\Contrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Igor Otero Muniz',
        //     'email' => 'igor@mail.com',
        //     'password' => 'password',
        //     'phone' => '1234567890',
        //     'document' => '197.902.327-13',
        //     'role' => 'influencer',
        //     'paying' => 'paying',
        // ]);

        // Empresa::create([
        //     'user_id' => '019e9546-2592-73c5-8448-2a9d5f57a9e5',
        //     'name' => 'Test Company',
        // ]);

        Contrato::create([
            'user_id' => '019ea7ea-0d1f-71bd-884c-3b1bdb1da873',
            'company_id' => '019eb22c-36ae-73b3-a774-5924b6b4fa5e',
            'title' => 'Test Contract',
            'description' => 'This is a test contract.',
            'total_price' => 1000,
            'start_date' => now(),
            'end_date' => now()->addMonth(),
            'status' => 'Ativo',
        ]);
    }
}
