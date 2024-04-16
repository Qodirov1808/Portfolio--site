<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        if(!$user){
             User::create([
                'name' => 'username',
                'role' => 'super',
                'phone' => '1234567',
                'password' => bcrypt('12345678'),
            ]);
           
        }else{
              $user->update([
                'name' => 'username',
                'role' => 'super',
                'phone' => '1234567',
                'password' => bcrypt('12345678'),
            ]);
        }
    
    
    }
}
