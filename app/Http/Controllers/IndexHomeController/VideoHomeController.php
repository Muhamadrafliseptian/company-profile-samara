<?php

namespace App\Http\Controllers\IndexHomeController;

use App\Models\IndexHome\VideoHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VideoHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_homes = VideoHome::get();
        return view('admin.partialsAdmin.crud-indexHome._video-home.index', compact('video_homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $video_home = VideoHome::get();
        return view('admin.partialsAdmin.crud-indexHome._video-home.create', compact('video_home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'video_home_tag' => 'required',
            'video_home_title' => 'required',
            'video_home_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'video_home_url' => 'required',
        ],
        [
            'video_home_title.required' => 'Please enter the title of the first video',
            'video_home_img.required' => 'Please enter the image of the first video',
            'video_home_img.image' => 'The image of the first video must be an image',
            'video_home_img.mimes' => 'The image of the first video must be a file of type: jpeg,png,jpg,svg',
            'video_home_img.max' => 'The image of the first video must be less than 2MB',
        ]);


        $image = $request->file('video_home_img');
        $image->storeAs('public/indexHome/_video_home/', $image->hashName());

        $video_home = VideoHome::create([
            'video_home_tag' => $request->video_home_tag,
            'video_home_title' => $request->video_home_title,
            'video_home_img' => $image->hashName(),
            'video_home_url' => $request->video_home_url,
        ]);

        if($video_home){
            return redirect()->route('video-home-caption.index')->with('success', 'Video Home created successfully');
        }else{
            return redirect()->route('video-home-caption.index')->with('error', 'Video Home not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoHome  $videoHome
     * @return \Illuminate\Http\Response
     */
    public function show(VideoHome $videoHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoHome  $videoHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video_home = VideoHome::find($id);
        return view('admin.partialsAdmin.crud-indexHome._video-home.edit', compact('video_home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoHome  $videoHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoHome $video_home)
    {
        if($request->hasFile('video_home_img')){
            $image = $request->file('video_home_img');
            $image->storeAs('public/indexHome/_video_home/', $image->hashName());
            Storage::delete('public/indexHome/_video_home/'.$video_home->video_home_img);

           $video_home = VideoHome::where('id', $request->id)->update([
                'video_home_tag' => $request->video_home_tag,
                'video_home_title' => $request->video_home_title,
                'video_home_img' => $image->hashName(),
                'video_home_url' => $request->video_home_url,
            ]);
        }else{
            $video_home = VideoHome::where('id', $request->id)->update([
                'video_home_tag' => $request->video_home_tag,
                'video_home_title' => $request->video_home_title,
                'video_home_url' => $request->video_home_url,
            ]);
        }

        if($video_home){
            return redirect()->route('video-home-caption.index')->with('success', 'Video Home updated successfully');
        }else{
            return redirect()->route('video-home-caption.edit')->with('error', 'Video Home not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoHome  $videoHome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video_home = VideoHome::findOrFail($id);
        Storage::delete('public/indexHome/_video_home/'.$video_home->video_home_img);
        $video_home->delete();
        return redirect()->route('video-home-caption.index')->with('success', 'Video Home deleted successfully');

    }
}
