<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function destinationtype(){
    	return $this->belongsTo('App\Models\Destinationtype','destinationtype_id');
    }

    public function region(){
    	return $this->belongsTo('App\Models\Region','region_id');
    }

    public function travelstyles(){
    	return $this->belongsToMany('App\Models\Travelstyle','travel_packages');
    }

    public function tour(){
    	return $this->belongsTo('App\Models\Tour','tour_id');
    }

    public function activity(){
    	return $this->belongsTo('App\Models\Activity','activity_id');
    }

    public function packageitinerary()
    {
      return $this->hasMany('App\Models\PackageItinerary', 'package_id')->orderBy('order_row');
    }
    public function packageequipment()
    {
      return $this->hasMany('App\Models\PackageEquipment', 'package_id');
    }

    public function costanddate()
    {
      return $this->hasMany('App\Models\CostandDate', 'package_id');
    }

    public function booking()
    {
      return $this->hasMany('App\Models\Booking', 'package_id');
    }

    public function scopePublished($query)
    {
      return $query->wherePublished(1);
    }

    public function slider__images()
    {
        return $this->hasMany('\App\Models\PackageSlider');
    }

    public function packagefaq()
    {
      return $this->hasMany('App\Models\PackageFaq', 'package_id');
    }

    public function packagereview()
    {
      return $this->hasMany('App\Models\PackageReview', 'package_id');
    }

    public function packagegdp()
    {
      return $this->hasMany('App\Models\PackageGdp', 'package_id');
    }
    public function scopePopulartours($query)
    {
      return $query->wherePopular_tours(1);
    }
}
