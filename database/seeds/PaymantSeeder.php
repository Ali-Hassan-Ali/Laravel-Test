<?php

use Illuminate\Database\Seeder;

class PaymantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Paymant::class, 50)->create();
    }
}
