<?php

use Illuminate\Database\Seeder;

class TestElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentation')->insert([
        	'title_pres' => 'presentation_test_01',
        	'description' => 'ceci est la description de la premiere presentation',
        ]);
        DB::table('slide')->insert([
        	'title_slide' => 'Slide 01',
        	'description' => 'ceci est la premiere slide de la premiere presentation',
        	'type_slide' => 2,
        	'presentation' => 1,
        ]);
        DB::table('slide')->insert([
        	'title_slide' => 'Slide 02',
        	'description' => 'ceci est la deuxieme slide de la premiere presentation',
        	'type_slide' => 4,
        	'presentation' => 1,
        ]);
        DB::table('slide')->insert([
        	'title_slide' => 'Slide 03',
        	'description' => 'ceci est la troisieme slide de la premiere presentation',
        	'type_slide' => 1,
        	'presentation' => 1,
        ]);
        DB::table('element')->insert([
        	'title_element' => 'Element 01',
        	'path_file' => '/resources/pictures/Element_01.jpg',
        	'url' => '',
        	'slide_id'=> 1,
        ]);
        DB::table('element')->insert([
        	'title_element' => 'Element 02',
        	'path_file' => '/resources/pictures/Element_02.jpg',
        	'url' => '',
        	'slide_id'=> 2,
        ]);
        DB::table('element')->insert([
        	'title_element' => 'Element 03',
        	'path_file' => '/resources/pictures/Element_03.jpg',
        	'url' => '',
        	'slide_id'=> 2,
        ]);
        DB::table('element')->insert([
        	'title_element' => 'Element 04',
        	'path_file' => '/resources/pictures/Element_04.jpg',
        	'url' => '',
        	'slide_id'=> 2,
        ]);
    }
}
