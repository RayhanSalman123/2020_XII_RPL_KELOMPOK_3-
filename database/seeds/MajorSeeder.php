<?php

use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            'major_name'  => 'Rekayasa Perangkat Lunak',        
            ]);

        DB::table('majors')->insert([
            'major_name'  => 'Multimedia',        
            ]);
    }
}
