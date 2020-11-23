<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'name'       => 'Dashboard',
            'priority'   => '1',
            'status'     => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menu')->insert([
            'name'       => 'Menu',
            'priority'   => '2',
            'status'     => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
