<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\courses;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses=['BCA','MCA','BBA','MBA','Bcom','Mcom','Engineer','Mtec','Btec','Bpharm','Mpharm','Bsc','Msc'];
        $type = ['undergraduate','postgraduate'];

        foreach($courses as $course){
            courses::create([
                "name" => $course,
                "type" => array_rand($type)
            ]); 
        }

    }
}
