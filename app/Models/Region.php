<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable=['name','slug','publish','banner_image','description'];

    public function activitys(){
        return $this->hasMany('App\Models\Activity','region_id');
      }

      public function packages(){
        return $this->hasMany('App\Models\Package','region_id','id');
      }

      public function scopePublish($query)
    {
      return $query->wherePublish(1);
    }


}
