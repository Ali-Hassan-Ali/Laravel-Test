<?php

use Illuminate\Database\Seeder;

class CoustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Coustomer::class, 50)->create();
    }
}
