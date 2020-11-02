<?php

use App\Order;
use Illuminate\Database\Seeder;
use Mock\OrderMock;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class,10)->state('pending')->create();
        factory(App\Order::class,10)->state('confirmed')->create();
        factory(App\Order::class,10)->state('completed')->create();
    }
}
