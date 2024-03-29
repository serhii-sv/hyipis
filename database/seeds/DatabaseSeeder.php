<?php
/*
 * This engine owned and produced by hyipis studio.
 * Visit our website: https://hyip.is/
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            TransactionTypesSeeder::class,
            CountriesSeeder::class,
            SettingSeeder::class,
            LanguageSeeder::class,
        ]);
    }
}
