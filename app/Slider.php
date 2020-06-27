<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";

    protected $fillable = [
        'image','title','sub_title'
   ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'image' => 'image',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
        ]);
    }
}
