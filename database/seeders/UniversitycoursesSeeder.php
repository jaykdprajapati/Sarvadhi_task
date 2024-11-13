<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\university_courses;

class UniversitycoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $uni_id=[1,2,3,4];
        $fees = ['1000000','2000000','3000000','5000000','60000000'];
        $intake = ['2025-01-01','2025-07-01']; 
        $duration = ['24 Months','2 Years','36 Months','1 year'];
        $entry_requirements=['10th Std','12 Std','BCA','MCA','BBA','MBA','Bcom','Mcom','Engineer','Mtec','Btec','Bpharm','Mpharm','Bsc','Msc'];
        $scholarship = ['60 per','70 per','80 per'];
        $language_requirements = ['Engish','Russian','Hindi'];
        $mode = ['online','regular'];
        $location = ['India','America','Russia','London'];

        for($i=1;$i<=10;$i++){

            university_courses::create([
                'universirt_id' =>$uni_id[array_rand($uni_id)],
                'course_id' => rand(1,13),
                'fees' =>$fees[array_rand($fees)],
                'intake' =>$intake[array_rand($intake)],
                'duration' =>$duration[array_rand($duration)],
                'scholarship' =>$scholarship[array_rand($scholarship)],
                'entry_requirements' =>$entry_requirements[array_rand($entry_requirements)],
                'language_requirements' =>$language_requirements[array_rand($language_requirements)],
                'mode' =>$mode[array_rand($mode)],
                'location' =>$location[array_rand($location)],
            ]);
        
        }
    }
}
