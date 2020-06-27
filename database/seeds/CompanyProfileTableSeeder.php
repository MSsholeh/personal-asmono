<?php

use App\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileTableSeeder extends Seeder
{
    public function run()
    {

        $s = CompanyProfile::create();
        $s->save();
    }
}
