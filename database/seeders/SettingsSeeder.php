<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder {

     /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run() {
        $settings = [
            [
                'id' => 1,
                'company_name' => 'Mystock',
                'company_email' => 'contact@hotech.ma',
                'company_phone' => '212 5 22 22 22 22' ,
                'site_logo' => 'logo.png',
                'default_currency_id' => 1,
                'default_currency_position' => 'left',
                'notification_email' => '1',
                'footer_text' => 'Mystock is a free open source stock management system',
                'company_address' => 'Rue 1, Casablanca, Maroc',
                'default_client_id' => '1',
                'default_warehouse_id' => '1',
                'default_language'  => 'fr',
                'is_invoice_footer' => '1',
                'invoice_footer' => 'Thank you for your business',
                'company_tax' => '0',
                'created_at' => now(),
                ],
        ];

        Setting::insert($settings);
    }


}
