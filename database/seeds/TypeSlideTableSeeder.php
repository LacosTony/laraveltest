<?php

use Illuminate\Database\Seeder;

class TypeSlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_slide')->insert([
        	'model' => 'no element',
        ]);
        DB::table('type_slide')->insert([
        	'model' => '1 element',
        ]);
        DB::table('type_slide')->insert([
        	'model' => '2 elements',
        ]);
        DB::table('type_slide')->insert([
        	'model' => '3 elements',
        ]);
        DB::table('type_slide')->insert([
        	'model' => '4 elements',
        ]);
        DB::table('type_slide')->insert([
        	'model' => '5 elements',
        ]);
    }
}
