<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = "portfolio";

    protected $fillable = [
        'image','title','year','location','desc','category_id','status'
    ];

    function category(){
		return $this->belongsTo('App\PortfolioCategory', 'category_id');
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
