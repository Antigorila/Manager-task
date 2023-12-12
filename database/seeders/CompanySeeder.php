<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types =[
            ['company_name' => 'Lionsdale Studio Kft.', 'company_address' => '1074 Budapest, Rákóczi út 82. fszt. 4', 'tax_number' => '26163176-1-42'],
            ['company_name' => 'Cash & Credit Kft.', 'company_address' => '1054 Budapest, Honvéd utca 8. 1. em. 2.', 'tax_number' => '12825343-2-41'],
            ['company_name' => 'Kultúr Projekt Nonprofit Kft.', 'company_address' => '1074 Budapest, Rákóczi út 82.', 'tax_number' => '24395623-2-42'],
            ['company_name' => 'Magic Wizard Kft.', 'company_address' => '1074 Budapest, Rákóczi út 82. fszt. U/4.', 'tax_number' => '26168250-2-42'],

        ];

        foreach ($types as $type) {
            Company::create($type);
        }
    }
}
