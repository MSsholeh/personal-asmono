<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "message";

    protected $fillable = [
        'name','email','subject','message','phone'
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
