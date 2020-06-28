<?php

use App\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingTableSeeder extends Seeder
{
    public function run()
    {

        $s = GeneralSetting::create([
            'website_name'     => 'Codenesia',
            'website_logo' => 'uploads/logoheader.png',
            'website_favicon' => 'uploads/favicon.png',
            'keyword'    => 'codensia, startup, development, website, aplikasi, yogyakarta',
            'metatext'  => 'Codenesia merupakan salah satu perusahaan yang bergerak di bidang IT, pengembangan website dan pembuatan konten kreatif yang dapat membantu memudahkan pengelolaan bisnis. Didirikan pada tahun 2018 di Yogyakarta, Codenesia didukung dengan semangat muda dan keinginan untuk memberikan dampak positif di bidang IT baik dalam skala nasional maupun internasional. Sadar akan pertumbuhan teknologi yang terus berkembang, Codenesia selalu mengikuti perkembangan teknologi terbaru untuk meningkatkan kualitas perusahaan.',

            'about_name'    => 'Asmono Wikan',
            'about_caption' => 'Journalist',
            'email'         => 'mail@codenesia.id',
            'phone_number'  => '085725629333',
            'address'       => 'Jl. Kaliurang KM.13, Sleman, Yogyakarta',

            'facebook'  => 'https://facebook.com/muh.s.sholeh',
            'linkedin'  => 'https://linkedin.com/in/mssholeh',
            'instagram' => 'https://instagram.com/mssholeh',

        ]);
        $s->save();
    }
}
