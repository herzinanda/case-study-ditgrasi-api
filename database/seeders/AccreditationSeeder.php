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
        $faculties = array(
            'Fakultas Kedokteran',
            'Fakutas Hukum',
            'Fakultas Pertanian',
            'Fakultas Teknik',
            'Fakultas Ekonomi dan Bisnis',
            'Fakultas Kedokteran Gigi',
            'Fakultas Ilmu Budaya',
            'Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'Fakultas Ilmu Sosial dan Ilmu Politik',
            'Fakultas Kesehatan Masyarakat',
            'Fakultas Keperawatan',
            'Fakultas Psikologi',
            'Fakultas Farmasi',
            'Fakultas Ilmu Komputer dan Teknologi Informasi',
            'Fakultas Kehutanan',
            'Sekolah Pascasarjana',
            'Fakultas Vokasi',
        );
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
                'faculty' => $faculties[array_rand($faculties)],
                'degree' => $degrees[array_rand($degrees)],
                'accreditation' => $accreditations[array_rand($accreditations)],
                'decree' => 'XXX/SK/LAM-INFOKOM/Ak/S/xXX/2023',
                'decree_url' => 'https://google.com',
            ]);
        }
    }
}
