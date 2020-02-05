<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->id = 1;
        $user->name = "Yulia";
        $user->email ="yulias@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->save();
    }
}
