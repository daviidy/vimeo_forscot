<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['text', 'video_id', 'user_id',];




       /**
        * [users description]
        * relationship one to many with Video model
        * @return [array] [description]
        */
        public function video()
        {
            return $this->belongsTo('App\Video');
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
