<?php

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
         $this->call([UserSeed::class, CarModelSeeder::class, CompanyDetailSeed::class, CategorySeed::class, ProductSeeder::class, PaymentSeeder::class]);
    }
}
