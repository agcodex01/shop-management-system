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
        // foreach(OrderMock::orders() as $order){
        //     Order::create($order);
        // }
        factory(App\Order::class,10)->state('pending')->create();
    }
}
