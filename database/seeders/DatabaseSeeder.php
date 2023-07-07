<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            //Si hay mas, se separan por coma
        //    ThematicsTableSeeder::class,
        //    ProviderTableSeeder::class,
        //    ProductsTableSeeder::class,
        //    TransportsTableSeeder::class,
        //    UsersTableSeeder::class,
        ]);
        // User::factory(5)->create();
        // Product::factory(50)->create();
    }
}
