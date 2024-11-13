<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\universities;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  

        $uname = ['GTU','ATU','RTU','LTU'];
        $site = ['gtu.com','atu.com','rtu.com','ltu.com'];
        $address = ['India','America','Russia','London'];
        $country_id = ['101','236','181','235'];
        $phone = ['900001000','900002000','900003000','900004000'];
        $dates = ['1900-11-13','2000-01-03','2010-05-15','1980-05-25'];

        

        foreach($uname as $key => $name){

            universities::create([
                'name' => $name,
                'adrress' => $address[$key],
                'website' => $site[$key],
                'phone' => $phone[$key],
                'country_id' => $country_id[$key],
                'ranking' =>rand(1,100),
                'established_date' =>$dates[$key],
                'description' => 'Getting all advance course and years if legecy',
                'facilities' => 'Hostel, Food, Labs, playgrpound, Scholership',
            ]); 

        }

    }
}
