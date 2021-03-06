<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'root',
            'password' => bcrypt('hot7Gb'),
            'nickname' => 'Root',
            'email'    => 'hank790315@gmail.com',
            'status'   => AdminStatus::ACTIVE,
        ]);
    }
}
