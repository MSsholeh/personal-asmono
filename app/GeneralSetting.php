<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $table = "generalsetting";

    protected $fillable = [
        'website_name',
        'website_logo',
        'website_favicon',
        'keyword',
        'metatext',
        //
        'about_name',
        'about_caption',
        'about_photo',
        'about_short_description',
        'year_experience',
        'about_title',
        'about_description',
        'about_image',
        'email',
        'phone_number',
        'address',
        //
        'facebook',
        'instagram',
        'linedin'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
        ]);
    }
}
