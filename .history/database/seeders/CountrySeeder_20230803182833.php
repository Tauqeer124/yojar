<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'Afghanistan',
            'Albania',
            'Algeria',
            // ... and so on for all 200 countries

            'Zimbabwe',
        ];

        // Create an array of associative arrays with 'name' key
        $countriesData = array_map(function ($country) {
            return ['name' => $country];
        }, $countries);

        // Insert the countries into the 'countries' table
        DB::table('countries')->insert($countriesData);
    }
}
