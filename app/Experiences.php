<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $table = "experiences";

    protected $fillable = [
        'title','description'
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
