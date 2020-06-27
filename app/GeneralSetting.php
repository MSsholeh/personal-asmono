<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $table = "generalsetting";

    protected $fillable = [
        'website_name', 'email', 'phone_number','address', 'keyword','metatext','website_logo','website_favicon','facebook','instagram','twitter'
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
