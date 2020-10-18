<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(ProductlineSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(OrderSeeder::class);
         $this->call(OrderProdcteSeeder::class);
         $this->call(PaymantSeeder::class);
         $this->call(EmployeeSeeder::class);
         $this->call(OfficeSeeder::class);
    }//end run

}//end databseSedder
