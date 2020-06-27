<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";

    protected $fillable = [
        'image','title','category_id','year','location'
    ];

    function category(){
		return $this->belongsTo('App\GalleryCategory', 'category_id');
	}

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
