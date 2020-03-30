<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert([
                'name' => str_random(4),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'first_name' => str_random(10),
                'middle_name' => str_random(1),
                'last_name' => str_random(10),
                'city' => str_random(10),
                'role_id' => App\Role::all()->random()->id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
