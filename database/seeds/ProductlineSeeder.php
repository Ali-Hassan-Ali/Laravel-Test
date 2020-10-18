<?php

use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Productline::class, 5)->create();
    }
}
