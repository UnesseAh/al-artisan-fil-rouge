<?php

namespace Database\Seeders;

use App\Models\OrderState;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordersStatus = [
            ['status'=> 'placed'],
            ['status' => 'shipped'],
            ['status' => 'delivered']
        ];

        foreach ($ordersStatus as $orderStatus){
            OrderState::create($orderStatus);
        }
    }
}
