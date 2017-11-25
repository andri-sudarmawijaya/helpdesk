<?php

use Illuminate\Database\Seeder;
use App\Settings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Settings();
        $settings->name = 'Helpdesk';
        $settings->logo = 'logo.png';
        $settings->footer_logo = 'footer-logo.png';
        $settings->description = '';
        $settings->footer_description = 'Helpdesk';
        $settings->copyrights = '© Copyrights 2017 Helpdesk All rights reserved';
        $settings->keywords = '';
        $settings->facebook = '';
        $settings->twitter = '';
        $settings->linkedin = '';
        $settings->staff_can_edit = 'yes';
        $settings->client_can_edit = 'yes';
        $settings->ticket_email = 'no';
        $settings->admin_email = 'badueny@gmail.com';
        $settings->save();
    }
}
