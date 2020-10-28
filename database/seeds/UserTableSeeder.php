<?php

use Illuminate\Database\Seeder;
use App\User;
use Mock\CustomerMock;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (CustomerMock::customers() as $customer) {
            User::create($customer);
        }
    }
}
