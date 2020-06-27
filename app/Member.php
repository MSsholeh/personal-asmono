<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "member";

    protected $fillable = [
        'image','name','desc','instagram', 'facebook','website'
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
