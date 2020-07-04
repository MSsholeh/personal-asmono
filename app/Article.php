<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yarmat\Comment\Traits\CommenterTrait;
use App\Comment;

class Article extends Model
{
    protected $table = "article";

    protected $fillable = [
        'image','title','slug','category_id','description','status'
    ];

    function category(){
		return $this->belongsTo('App\ArticleCategory', 'category_id');
	}

    public function comments()
    {
        return $this->hasMany('App\Comment');
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
