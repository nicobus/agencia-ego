<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;


class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('cars')->insert([
            'category_id' => '1',
            'model' => 'yaris',
            'year' => '2020',
            'price' =>'1038900',
            'list_image' => 'yaris.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '1',
            'model' => 'prius',
            'year' => '2019',
            'price' =>'1038900',
            'list_image' => 'prius-1.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '1',
            'model' => 'etios',
            'year' => '2019',
            'price' =>'815900',
            'list_image' => 'etios.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '1',
            'model' => 'corolla',
            'year' => '2018',
            'price' =>'1430700',
            'list_image' => 'corolla.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '1',
            'model' => 'camry',
            'year' => '2018',
            'price' =>'3753200',
            'list_image' => 'camry.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '1',
            'model' => 'toyota 86',
            'year' => '2019',
            'price' =>'3812100',
            'list_image' => 'toyota-86.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '3',
            'model' => 'innova',
            'year' => '2020',
            'price' =>'1430700',
            'list_image' => 'innova.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '3',
            'model' => 'SW4',
            'year' => '2019',
            'price' =>'3236200',
            'list_image' => 'sw-4.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '3',
            'model' => 'RAV4',
            'year' => '2019',
            'price' =>'3170200',
            'list_image' => 'rav-4.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '3',
            'model' => 'Land Cruiser Prado',
            'year' => '2017',
            'price' =>'815900',
            'list_image' => 'cruiser.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '3',
            'model' => 'Land Cruiser 200',
            'year' => '2018',
            'price' =>'7873100',
            'list_image' => 'prado.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
        DB::table('cars')->insert([
            'category_id' => '2',
            'model' => 'hilux',
            'year' => '2020',
            'price' =>'1507000',
            'list_image' => 'hilux.png',
            'title' => 'Potencia y fiabilidad',
            'general_description' => $faker->text($maxNbChars = 200),
            'image_carrousel_01' => 'image01.png',
            'title_image_carrousel_01' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_01' => $faker->text($maxNbChars = 50),
            'image_carrousel_02' => 'image02.png',
            'title_image_carrousel_02' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_02' => $faker->text($maxNbChars = 50),
            'image_carrousel_03' => 'image03.png',
            'title_image_carrousel_03' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_03' => $faker->text($maxNbChars = 50),
            'image_carrousel_04' => 'image04.png',
            'title_image_carrousel_04' => $faker->sentence($nbWords = 4, $variableNbWords = true),
            'description_image_carrousel_04' => $faker->text($maxNbChars = 50),
            'subtitle_01' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_01' => $faker->text($maxNbChars = 25),
            'image_subtitle_01' => '1.png',
            'subtitle_02' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'description_subtitle_02' => $faker->text($maxNbChars = 25),
            'image_subtitle_02' => '2.png', 
        ]);
    }
}
