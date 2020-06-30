<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";

    protected $fillable = [
        'image','title','category_id','description','status'
    ];

    function category(){
		return $this->belongsTo('App\ArticleCategory', 'category_id');
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
