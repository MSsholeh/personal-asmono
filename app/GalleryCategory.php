<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $table = "gallerycategory";

    protected $fillable = [
        'id','name'
   ];

    public function gallery()
    {
        return $this->hasMany('App\Gallery');
    }

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
    public function galleries(){
        return $this->hasMany(Gallery::class, 'category_id');
    }
}
