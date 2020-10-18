<?php

use Illuminate\Database\Seeder;

class OrderProdcteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrderProdcte::class, 50)->create();
    }
}
