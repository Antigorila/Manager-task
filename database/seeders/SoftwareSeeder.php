<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types =[
            ['name' => 'Windows', 'license' => true, 'expiration_date' => now(), 'active' => true],
            ['name' => 'VS code', 'license' => true, 'expiration_date' => now(), 'active' => true],
            ['name' => 'XAMP', 'license' => true, 'expiration_date' => now(), 'active' => true],
            ['name' => 'DB viewer', 'license' => true, 'expiration_date' => now(), 'active' => true],
        ];
        foreach ($types as $type) {
            Software::create($type);
        }
    }
}
