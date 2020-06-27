<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";

    protected $fillable = [
        'image','title','desc'
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

    public function getAvatarAttribute($value)
    {
        if (!$value) {
            return 'http://placehold.it/160x160';
        }

        return config('variables.avatar.public').$value;
    }
    public function setAvatarAttribute($photo)
    {
        $this->attributes['image'] = move_file($photo, 'image');
    }
}
