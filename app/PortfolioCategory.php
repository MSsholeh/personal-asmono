<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = "portfoliocategory";

    protected $fillable = [
        'name'
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

    public function portfolios(){
        return $this->hasMany(Portfolio::class, 'category_id');
    }
}
