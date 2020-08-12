<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name', 'link', 'category_id', 'user_id'];




       /**
        * [users description]
        * relationship one to many with Category model
        * @return [array] [description]
        */
        public function category()
        {
            return $this->belongsTo('App\Category');
        }

        /**
         * [users description]
         * relationship one to many with User model
         * @return [array] [description]
         */
         public function user()
         {
             return $this->belongsTo('App\User');
         }
}
