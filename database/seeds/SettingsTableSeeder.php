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
        $settings->name = 'Ticket Plus';
        $settings->logo = 'logo.png';
        $settings->footer_logo = 'footer-logo.png';
        $settings->description = '';
        $settings->footer_description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has';
        $settings->copyrights = '© Copyrights 2017 Ticket Plus All rights reserved';
        $settings->keywords = '';
        $settings->facebook = 'https://www.facebook.com/';
        $settings->twitter = 'https://www.twitter.com/';
        $settings->linkedin = 'https://www.linkedin.com/';
        $settings->staff_can_edit = 'yes';
        $settings->client_can_edit = 'yes';
        $settings->ticket_email = 'no';
        $settings->admin_email = 'nd_sohail@yahoo.com';
        $settings->save();
    }
}
