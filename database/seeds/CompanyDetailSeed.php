<?php

use App\Models\Companydetail;
use Illuminate\Database\Seeder;

class CompanyDetailSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Companydetail::class, 20)->create();
    }
}
