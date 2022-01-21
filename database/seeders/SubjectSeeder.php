<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        Subject::query()->insert([

            //grade 5
            ['name' => 'Sinhala'],
            ['name' => 'Maths'],
            ['name' => 'Sinhala'],
            ['name' => 'English'],
            ['name' => 'Tamil'],

            //grade 6-9 common
            ['name' => 'Buddhism'],
            ['name' =>  'Christianity'],
            ['name' =>  'Catholic'],
            ['name' => 'Shivenary'],
            ['name' => 'Sinhala Language'],
            ['name' => 'Sinhala Language & Literature'],
            ['name' =>  'English Language'],
            ['name' =>  'Science'],
            ['name' => 'History'],
            ['name' => 'Geography'],
            ['name' =>  'Life skills &-Citizenshipn Education'],
            ['name' => 'Citizen Education'],
            ['name' =>  'Dancing'],
            ['name' =>  'Eastern Music'],
            ['name' =>  'Western Music'],
            ['name' =>  'Art'],
            ['name' => 'Drama & Theatre'],
            ['name' =>  'Practical &-Technical Studies'],
            ['name' =>  'Health & Physical Education'],

            // grade 10-11 special
            ['name' => 'Design and Mechanical Technology'],
            ['name' => 'Home Economics'],
            ['name' => 'Agriculture & Food Technology'],
            ['name' =>  'Aquatic Biological Resources Technology'],
            ['name' =>  'Design and Construction Technology'],
            ['name' => 'Crafts'],

            // grade 12-13 special
            ['name' =>  'Physics'],
            ['name' =>  'Chemistry'],
            ['name' => 'Agriculture Science'],
            ['name' => 'Biology'],
            ['name' =>  'Combined Maths'],
            ['name' =>  'Economics'],
            ['name' =>  'Logic and the Scientific Method'],
            ['name' => 'Political Science'],
            ['name' =>  'Business Statistics'],
            ['name' =>  'Business Studies'],
            ['name' =>  'Accounting'],
            ['name' =>  'Information and Communication Technology'],
            ['name' => 'Science for Technology'],
            ['name' => 'Engineering Technology'],
            ['name' => 'Biosystems Technology'],
        ]);
    }
}
