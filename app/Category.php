<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',];




       /**
        * [users description]
        * relationship one to many with Video model
        * @return [array] [description]
        */
        public function videos()
        {
            return $this->hasMany('App\Video');
        }
}
