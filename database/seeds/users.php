<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $data = [];

        for ($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name'     => 'Asmono Wikan',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role'     => 10,
                'bio'      => $faker->realText(),
            ]);
        }

        User::insert($data);
    }
}
