<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Code Dokugaku',
            'address' => 'Tokyo, Japan',
            'contact_number' => '+8180-3729-4747',
            'contact_email' => 'kenyu@gmail.com'
        ]);
    }
}
