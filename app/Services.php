<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";

    protected $fillable = [
        'id','icon','title','description','created_at','updated_at'
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
