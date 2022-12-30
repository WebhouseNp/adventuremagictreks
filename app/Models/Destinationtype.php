<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Destination;

class Destinationtype extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function destination()
    {
      return $this->belongsTo('App\Models\Destination', 'destination_id');
    }

    public function scopePublished($query)
    {
      return $query->wherePublished(1);
    }

    public function scopeFindwithslug($query, $slug)
    {
      return $query->whereSlug($slug);
    }
    public function groups(){
      return $this->hasMany('App\Models\Group','destinationtype_id');
    }

    public function packages(){
      return $this->hasMany('App\Models\Package','destinationtype_id');
    }

}
