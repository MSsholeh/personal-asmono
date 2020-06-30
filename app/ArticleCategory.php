<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = "article_category";

    protected $fillable = [
        'id','name'
    ];

    public function article()
    {
        return $this->hasMany('App\Article');
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
}
