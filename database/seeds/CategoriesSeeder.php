<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Autos',
            'description' => 'vehiculos de la categoria autos',
        ]);
        DB::table('categories')->insert([
            'name' => 'Pickups y Comerciales',
            'description' => 'vehiculos de categoria pickups y de uso comercial',
        ]);
        DB::table('categories')->insert([
            'name' => 'SUVs y Crossovers',
            'description' => 'vehiculos de categoria SUVs y Crossovers',
        ]);
    }
}
