<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticlesTableData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            DB::table('articles')->insert([
                'title' =>  $this->faker->title,
                'exerpt' =>  $this->faker->paragraph,
                'body' => $this->faker->paragraph

            ]);
        }
    }
}
