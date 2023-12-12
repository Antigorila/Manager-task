<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types =[
            ['name' => 'Nagy terem', 'location' => 'Budapest Rákóczi út'],
            ['name' => 'Alagsor 1', 'location' => 'Budapest Rákóczi út'],
            ['name' => 'Alagsor 2', 'location' => 'Budapest Rákóczi út'],
            ['name' => 'Iroda 1', 'location' => 'Budapest Rákóczi út'],
            ['name' => 'Iroda 2', 'location' => 'Budapest Rákóczi út']
        ];
        foreach ($types as $type) {
            Classroom::create($type);
        }
    }
}
