<?php

namespace Database\Seeders;

use App\Models\StudyProgramAccreditations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AccreditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $degrees = array(
            'Sarjana',
            'Magister',
            'Doctor',
        );
        $accreditations = array(
            'Unggul',
            'Baik Sekali',
            'Baik',
        );

        DB::table('study_program_accreditations')->truncate();

        for ($i = 0; $i < 200; $i++) {
            StudyProgramAccreditations::create([
                'study_program' => $faker->sentence(3),
                'degree' => $degrees[array_rand($degrees)],
                'accreditation' => $accreditations[array_rand($accreditations)],
                'decree' => 'XXX/SK/LAM-INFOKOM/Ak/S/xXX/2023',
                'decree_url' => 'https://google.com',
            ]);
        }
    }
}
