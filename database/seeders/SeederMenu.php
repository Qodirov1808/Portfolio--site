<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
class SeederMenu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'Home',
        ]);

        Menu::create([
            'name' => 'About',
        ]);

        Menu::create([
            'name' => 'Work',
        ]);

        Menu::create([
            'name' => 'Price',
        ]);

        Menu::create([
            'name' => 'Team',
        ]);

        Menu::create([
            'name' => 'Contact',
        ]);

    }
}
