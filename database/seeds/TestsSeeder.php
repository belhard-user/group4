<?php

use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->truncate();

        $records = [];
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10000; $i++){
            $records[] = [
                'rip_date' => $faker->dateTimeBetween(),
                'updated_at' => $faker->dateTimeBetween(),
                'created_at' => $faker->dateTimeBetween(),
                'name' => $faker->userName,
                'email' => $faker->email,
                'address' => $faker->address
            ];
        }

        DB::table('tests')->insert($records);
    }
}
