<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\AdminsRole;
use Auth;
use Session;
use Image;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Setting::first();
        $siteSettingModuleCount = AdminsRole::where(['admin_id'=>Auth::user()->id,'module'=>'siteSetting'])->count();
        if(Auth::user()->type=="superadmin"){
            $siteSettingModule['view_access'] = 1;
            $siteSettingModule['edit_access'] = 1;
            $siteSettingModule['full_access'] = 1;
        }else if($siteSettingModuleCount==0){
            $message= "Sorry, This Section is restricted for your role !!";
            session::flash('error',$message);
            return redirect('admin/dashboard');
        }else{
            $siteSettingModule = AdminsRole::where(['admin_id'=>Auth::user()->id,'module'=>'siteSetting'])->first()->toArray();
            // dd($siteSettingModule);die;
        }
        return view('admin.setting', compact('detail','siteSettingModule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort('404');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules());
        $formInput = $request->except(['contactus_image', 'featured_trips_image', 'slogan_imagefirst','tripadvisor__image', 'slogan_imagesecond','whoweare_banner','sqt_image1','sqt_image2','ps_image1','ps_image2','privacy_policy_banner','travel_term_banner','travelStyle_image','classicVacation_image','aboutus_image','travelGuide_image','destination_banner_image']);
        $record = Setting::find($id);

        // if($request->hasFile('logo')){
        //   if($record->logo)
        //     $this->unlinkImage($record->logo);
        //   list($width, $height) = getimagesize($request->file('logo')->getRealPath());
        //   $formInput['logo'] = $this->imageProcessing($request->file('logo'),$width,$height, 'no');
        // }

        if($request->hasFile('logo')){
          if($record->logo)
            $this->unlinkImage($record->logo);
          list($width, $height) = getimagesize($request->file('logo')->getRealPath());
          $formInput['logo'] = $this->imageProcessing($request->file('logo'),$width,$height, 'no');
        }

        if($request->hasFile('favicon')){
          if($record->favicon)
            $this->unlinkImage($record->favicon);
          list($width, $height) = getimagesize($request->file('favicon')->getRealPath());
          $formInput['favicon'] = $this->imageProcessing($request->file('favicon'),$width,$height, 'no');
        }

        if($request->hasFile('contactus_image')){
          if($record->contactus_image)
              $this->unlinkImage($record->contactus_image);
          $formInput['contactus_image'] = $this->imageProcessing($request->contactus_image, 1920, 886, 'no');
        }



        if($request->hasFile('testimonial_banner_image')){
          if($record->testimonial_banner_image)
              $this->unlinkImage($record->testimonial_banner_image);
          $formInput['testimonial_banner_image'] = $this->imageProcessing($request->testimonial_banner_image, 1349, 354, 'no');
        }

        if($request->hasFile('featured_trips_image')){
          if($record->featured_trips_image)
              $this->unlinkImage($record->featured_trips_image);
          $formInput['featured_trips_image'] = $this->imageProcessing($request->featured_trips_image, 1346, 547, 'no');
        }

        if($request->hasFile('slogan_imagefirst')){
          if($record->slogan_imagefirst)
              $this->unlinkImage($record->slogan_imagefirst);
          $formInput['slogan_imagefirst'] = $this->imageProcessing($request->slogan_imagefirst, 1349, 384, 'no');
        }

        if($request->hasFile('slogan_imagesecond')){
          if($record->slogan_imagesecond)
              $this->unlinkImage($record->slogan_imagesecond);
          $formInput['slogan_imagesecond'] = $this->imageProcessing($request->slogan_imagesecond, 1349, 384, 'no');
        }

        if($request->hasFile('latest_video_backgroundimage')){
          if($record->latest_video_backgroundimage)
              $this->unlinkImage($record->latest_video_backgroundimage);
          $formInput['latest_video_backgroundimage'] = $this->imageProcessing($request->latest_video_backgroundimage, 1347, 578, 'no');
        }

         if ($request->hasFile('tripadvisor__image')) {
              if ($record->tripadvisor__image) {
                  $this->unlinkImage($record->tripadvisor__image);
              }
              list($width, $height) = getimagesize($request->file('tripadvisor__image')->getRealPath());
              $formInput['tripadvisor__image'] = $this->imageProcessing($request->tripadvisor__image, $width, $height, 'no');
          }

          if($request->hasFile('whywithus_icon')){
            if($record->whywithus_icon)
              $this->unlinkImage($record->whywithus_icon);
            list($width, $height) = getimagesize($request->file('whywithus_icon')->getRealPath());
            $formInput['whywithus_icon'] = $this->imageProcessing($request->file('whywithus_icon'),$width,$height, 'no');
          }



          //CV
          if($request->hasFile('whoweare_banner')){
            if($record->whoweare_banner)
                $this->unlinkImage($record->whoweare_banner);
            $formInput['whoweare_banner'] = $this->imageProcessing($request->whoweare_banner, 1920, 886, 'no');
          }
          if($request->hasFile('sqt_image1')){
            if($record->sqt_image1)
                $this->unlinkImage($record->sqt_image1);
            $formInput['sqt_image1'] = $this->imageProcessing($request->sqt_image1, 300, 200, 'no');
          }
          if($request->hasFile('sqt_image2')){
            if($record->sqt_image2)
                $this->unlinkImage($record->sqt_image2);
            $formInput['sqt_image2'] = $this->imageProcessing($request->sqt_image2, 300, 200, 'no');
          }
          if($request->hasFile('ps_image1')){
            if($record->ps_image1)
                $this->unlinkImage($record->ps_image1);
            $formInput['ps_image1'] = $this->imageProcessing($request->ps_image1, 300, 200, 'no');
          }
          if($request->hasFile('ps_image2')){
            if($record->ps_image2)
                $this->unlinkImage($record->ps_image2);
            $formInput['ps_image2'] = $this->imageProcessing($request->ps_image2, 300, 200, 'no');
          }


          if($request->hasFile('whyus_banner')){
            if($record->whyus_banner)
                $this->unlinkImage($record->whyus_banner);
            $formInput['whyus_banner'] = $this->imageProcessing($request->whyus_banner, 1920, 886, 'no');
          }
          if($request->hasFile('whyus_sqt_image1')){
            if($record->whyus_sqt_image1)
                $this->unlinkImage($record->whyus_sqt_image1);
            $formInput['whyus_sqt_image1'] = $this->imageProcessing($request->whyus_sqt_image1, 300, 200, 'no');
          }
          if($request->hasFile('whyus_ps_image1')){
            if($record->whyus_ps_image1)
                $this->unlinkImage($record->whyus_ps_image1);
            $formInput['whyus_ps_image1'] = $this->imageProcessing($request->whyus_ps_image1, 300, 200, 'no');
          }

          if($request->hasFile('team_banner_image')){
            if($record->team_banner_image)
                $this->unlinkImage($record->team_banner_image);
            $formInput['team_banner_image'] = $this->imageProcessing($request->team_banner_image, 1920, 886, 'no');
          }

          if($request->hasFile('privacy_policy_banner')){
            if($record->privacy_policy_banner)
                $this->unlinkImage($record->privacy_policy_banner);
            $formInput['privacy_policy_banner'] = $this->imageProcessing($request->privacy_policy_banner, 1920, 886, 'no');
          }

          if($request->hasFile('travel_term_banner')){
            if($record->travel_term_banner)
                $this->unlinkImage($record->travel_term_banner);
            $formInput['travel_term_banner'] = $this->imageProcessing($request->travel_term_banner, 1920, 886, 'no');
          }
          if($request->hasFile('blog_banner')){
            if($record->blog_banner)
                $this->unlinkImage($record->blog_banner);
            $formInput['blog_banner'] = $this->imageProcessing($request->blog_banner, 1920, 886, 'no');
          }
          if($request->hasFile('traveler_review_banner')){
            if($record->traveler_review_banner)
                $this->unlinkImage($record->traveler_review_banner);
            $formInput['traveler_review_banner'] = $this->imageProcessing($request->traveler_review_banner, 1920, 886, 'no');
          }

          if($request->hasFile('travelStyle_image')){
            if($record->travelStyle_image)
                $this->unlinkImage($record->travelStyle_image);
            $formInput['travelStyle_image'] = $this->imageProcessing($request->travelStyle_image, 1920, 886, 'no');
          }

          if($request->hasFile('classicVacation_image')){
            if($record->classicVacation_image)
                $this->unlinkImage($record->classicVacation_image);
            $formInput['classicVacation_image'] = $this->imageProcessing($request->classicVacation_image, 1920, 886, 'no');
          }

          if($request->hasFile('aboutus_image')){
            if($record->aboutus_image)
                $this->unlinkImage($record->aboutus_image);
            $formInput['aboutus_image'] = $this->imageProcessing($request->aboutus_image, 1920, 886, 'no');
          }

          if($request->hasFile('travelGuide_image')){
            if($record->travelGuide_image)
                $this->unlinkImage($record->travelGuide_image);
            $formInput['travelGuide_image'] = $this->imageProcessing($request->travelGuide_image, 1920, 886, 'no');
          }

          if($request->hasFile('destination_banner_image')){
            if($record->destination_banner_image)
                $this->unlinkImage($record->destination_banner_image);
            $formInput['destination_banner_image'] = $this->imageProcessing($request->destination_banner_image, 1920, 886, 'no');
          }

          if($request->hasFile('aboutus_side_image_home')){
            if($record->aboutus_side_image_home)
                $this->unlinkImage($record->aboutus_side_image_home);
            $formInput['aboutus_side_image_home'] = $this->imageProcessing($request->aboutus_side_image_home, 576, 675, 'no');
          }

          //We accept
          if($request->hasFile('wa_image1')){
            if($record->wa_image1)
                $this->unlinkImage($record->wa_image1);
            $formInput['wa_image1'] = $this->imageProcessing($request->wa_image1, 271, 274, 'no');
          }

          if($request->hasFile('wa_image2')){
            if($record->wa_image2)
                $this->unlinkImage($record->wa_image2);
            $formInput['wa_image2'] = $this->imageProcessing($request->wa_image2, 271, 274, 'no');
          }

          if($request->hasFile('wa_image3')){
            if($record->wa_image3)
                $this->unlinkImage($record->wa_image3);
            $formInput['wa_image3'] = $this->imageProcessing($request->wa_image3, 271, 274, 'no');
          }

          if($request->hasFile('wa_image4')){
            if($record->wa_image4)
                $this->unlinkImage($record->wa_image4);
            $formInput['wa_image4'] = $this->imageProcessing($request->wa_image4, 271, 274, 'no');
          }

        $record->update($formInput);
        return redirect()->back()->with('message', 'Setting Edited Successfuly.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function rules()
    {
        $rules = [
          'site_name' => 'required',
          'logo' => 'mimes:jpg,jpeg,png,gif|max:3048',
          'contactus_image' => 'mimes:jpg,jpeg,png,gif|max:3048',
          'featured_trips_image' => 'mimes:jpg,jpeg,png,gif|max:3048',
          'slogan_image' => 'mimes:jpg,jpeg,png,gif|max:3048',
        ];
        return $rules;
    }

    public function imageProcessing($image, $width, $height, $otherpath){

      $input['imagename'] = Date("D-h-i-s") . '-' . rand() . '-' . $image->getClientOriginalName();
      $thumbPath = public_path('images/thumbnail');
      $mainPath = public_path('images/main');
      $listingPath= public_path('images/listing');

      // if(is_null($height))
      // {
      //   $img = Image::make($image->getRealPath());
      //   $img->resize($width, null, function($constraint){
      //     $constraint->aspectRatio();
      //   })->save($mainPath.'/'.$input['imagename']);
      // } else {
        $img = Image::make($image->getRealPath());
        $img->resize($width, $height)->save($mainPath.'/'.$input['imagename']);
      // }

      if($otherpath == 'yes'){
        $img->resize($width/2, null, function($constraint){
          $constraint->aspectRatio();
        })->save($listingPath.'/'.$input['imagename']);

        $img->fit(200, null, function($constraint){
          $constraint->aspectRatio();
        })->save($thumbPath.'/'.$input['imagename']);
      }

        $img->destroy();
        return $input['imagename'];
    }

    public function unlinkImage($imagename)
    {
      $thumbPath = public_path('images/thumbnail/') . $imagename;
      $mainPath = public_path('images/main/') . $imagename;
      $listingPath= public_path('images/listing/') . $imagename;
       if(file_exists($thumbPath))
          unlink($thumbPath);
       if(file_exists($mainPath))
          unlink($mainPath);
       if(file_exists($listingPath))
          unlink($listingPath);
      return;
    }
}
