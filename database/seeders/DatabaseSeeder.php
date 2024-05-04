<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dimas Admin',
            'email' => 'dimardians016@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'Diskominfo Kota Semarang',
            'email' => 'diskominfo@semarangkota.go.id',
            'address' => 'Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah Kota Semarang',
            'latitude' => '-6.983271',
            'longitude' => '110.413575',
            'radius_km' => '0,5',
            'time_in' => '08.00',
            'time_out' => '17.00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
