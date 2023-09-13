<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $csvFilePath = database_path('seeders/property-data.csv');

        $csv = array_map('str_getcsv', file($csvFilePath));
        $headers = array_shift($csv);

        foreach ($csv as $row) {
            $data = array_combine($headers, $row);

            Apartment::create($data);
        }
    }
}
