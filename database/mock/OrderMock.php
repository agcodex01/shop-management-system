<?php

namespace Mock;

class OrderMock {
    public static function orders():array
    {
        return array(
            array(
                'total'=>90.0,
                'shipping'=>100.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'pending',
                'costumer_message'=>'tikyang order1',
                'user_id'=>5,
            ), // Orders
            array(
                'total'=>80.0,
                'shipping'=>50.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'pending',
                'costumer_message'=>'tikyang order2',
                'user_id'=>2,
            ), // Orders
            array(
                'total'=>120.0,
                'shipping'=>90.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'pending',
                'costumer_message'=>'tikyang order3',
                'user_id'=>4,
            ), // Orders
            array(
                'total'=>100.0,
                'shipping'=>50.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'confirmed',
                'costumer_message'=>'tikyang order4',
                'user_id'=>4,
            ), // Orders
            array(
                'total'=>80.0,
                'shipping'=>100.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'confirmed',
                'costumer_message'=>'tikyang order5',
                'user_id'=>3,
            ), // Orders
            array(
                'total'=>200.0,
                'shipping'=>115.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'confirmed',
                'costumer_message'=>'tikyang order6',
                'user_id'=>1,
            ), // Orders
            array(
                'total'=>125.0,
                'shipping'=>50.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'complete',
                'costumer_message'=>'tikyang order7',
                'user_id'=>3,
            ), // Orders
            array(
                'total'=>301.0,
                'shipping'=>100.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'complete',
                'costumer_message'=>'tikyang order8',
                'user_id'=>1,
            ), // Orders
            array(
                'total'=>450.0,
                'shipping'=>56.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'complete',
                'costumer_message'=>'tikyang order9',
                'user_id'=>2,
            ), // Orders
            array(
                'total'=>120.0,
                'shipping'=>30.0,
                'delivery_time'=> time(),
                'delivery_date' => date('Y:m:d'),
                'status'=>'complete',
                'costumer_message'=>'tikyang 10',
                'user_id'=>5,
            ), // Orders
        );
    }
}
