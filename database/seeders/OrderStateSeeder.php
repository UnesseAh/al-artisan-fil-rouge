<?php

namespace Database\Seeders;

use App\Models\OrderState;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordersStatus = [
            ['name'=> 'placed'],
            ['name' => 'shipped'],
            ['name' => 'delivered']
        ];

        foreach ($ordersStatus as $orderStatus){
            OrderState::create($orderStatus);
        }
    }
}
