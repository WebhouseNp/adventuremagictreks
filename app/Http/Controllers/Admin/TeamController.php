<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Image;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Team::orderBy('updated_at', 'desc')->get();
        return view('admin.team.list', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'image' => 'mimes:jpg,jpeg,png,gif|max:3048',
        ]);
        $formInput = $request->except(['image', 'published','slug']);
        // $formInput['slug'] = $this->generateSlug($request->title, $request->slug, null);
        $formInput['slug'] = $this->generateSlug($request->name, $request->slug, null);

        $formInput['published'] = is_null($request->published) ? 0 : 1;
        if($request->hasFile('image')){
          $formInput['image'] = $this->imageProcessing($request->image, 557, 418, 'no');
        }
        Team::create($formInput);
        return redirect()->route('team.index')->with('message', 'Team Create Successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Team::findorfail($id);
        return view('admin.team.edit', compact('detail'));
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
      $request->validate([
        'name' => 'required',
        'image' => 'mimes:jpg,jpeg,png,gif|max:3048',
      ]);
      $oldRecord = Team::findorfail($id);

      $formInput = $request->except(['published', 'image','slug']);
      $formInput['slug'] = $this->generateSlug($request->name, $request->slug, $oldRecord);
      $formInput['published'] = is_null($request->published) ? 0 : 1;
      if($request->hasFile('image')){
        if($oldRecord->image){
          $this->unlinkImage($oldRecord->image);
        }
        $formInput['image'] = $this->imageProcessing($request->image, 557, 418, 'no');
      }
      $oldRecord->update($formInput);
      return redirect()->route('team.index')->with('message', 'Team Edited Successfuly.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Team::findorfail($id);
        if($record->image){
          $this->unlinkImage($record->image);
        }
        $record->delete();
        return redirect()->route('team.index')->with('message', 'Team Deleted Successfuly.');
    }

    public function generateSlug($name, $slug, $oldRecord)
    {
       if(is_null($slug))
          $slugReturn = Str::slug($name);
       else
         $slugReturn = Str::slug($slug);

      $count = Team::where('slug', $slugReturn)->count();

        if(!is_null($oldRecord)){
          if($oldRecord->slug == $slugReturn){
            return $slugReturn;
          }else{
            if($count > 0)
              return $slugReturn . '-' . $count;
            else
              return $slugReturn;
          }
        } else {
            if($count > 0)
              return $slugReturn . '-' . $count;
            else
              return $slugReturn;
        }
    }

    public function imageProcessing($image, $width, $height, $otherpath){

      $input['imagename'] = Date("D-h-i-s") . '-' . rand() . '-' . $image->getClientOriginalName();
      $thumbPath = public_path('images/thumbnail');
      $mainPath = public_path('images/main');
      $listingPath= public_path('images/listing');

      $img = Image::make($image->getRealPath());
      $img->resize($width, $height)->save($mainPath.'/'.$input['imagename']);

      if($otherpath == 'yes'){
        $img1 = Image::make($image->getRealPath());
        $img1->resize($width/2, null, function($constraint){
          $constraint->aspectRatio();
        })->save($listingPath.'/'.$input['imagename']);

        $img1->fit(200, null, function($constraint){
          $constraint->aspectRatio();
        })->save($thumbPath.'/'.$input['imagename']);
        $img1->destroy();
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
