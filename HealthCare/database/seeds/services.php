<?php

use Illuminate\Database\Seeder;

class services extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
        	'title'=>'ABC',
        	'id_title'=>1,
        	'title_con'=>'abc',
        	'content'=>'500',
        	'id_packages'=>1,
            'image'=>''
        ]);
    }
}
