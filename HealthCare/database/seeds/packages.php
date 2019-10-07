<?php

use Illuminate\Database\Seeder;

class packages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         for($i =0; $i<=20; $i++){
         	DB::table('packages')->insert([
            'name' => 'JVB' . Str::random(10),
            'address' =>Str::random(10) . 'Hà Nội',
            'content' =>Str::random(500) . 'abc',
            'date' => "5 Ngày"
        ]);
         }
    }
}
