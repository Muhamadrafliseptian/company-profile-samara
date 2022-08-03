<?php

namespace App\Http\Controllers\IndexHomeController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\IndexHome\TestimonialHome;

class TestimonialHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial_homes = TestimonialHome::get();
        return view('admin.partialsAdmin.crud-indexHome._testimonial-home.index', compact('testimonial_homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $testimonial_home = TestimonialHome::get();
        return view('admin.partialsAdmin.crud-indexHome._testimonial-home.create', compact('testimonial_home'));
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
            'testimonial_home_tag' => 'required',
            'testimonial_home_title' => 'required',
            'testimonial_home_profile' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'testimonial_home_name' => 'required',
            'testimonial_home_jobtitle' => 'required',
            'testimonial_home_caption' => 'required',
        ],[
            'testimonial_home_tag.required' => 'Please enter the tag of the testimonial',
            'testimonial_home_title.required' => 'Please enter the title of the testimonial',
            'testimonial_home_profile.required' => 'Please enter the profile of the testimonial',
            'testimonial_home_profile.image' => 'The profile of the testimonial must be an image',
            'testimonial_home_profile.mimes' => 'The profile of the testimonial must be a file of type: jpeg,png,jpg,svg',
            'testimonial_home_profile.max' => 'The profile of the testimonial must be less than 2MB',
            'testimonial_home_name.required' => 'Please enter the name of the testimonial',
            'testimonial_home_jobtitle.required' => 'Please enter the job title of the testimonial',
            'testimonial_home_caption.required' => 'Please enter the caption of the testimonial',
        ]);

        $image = $request->file('testimonial_home_profile');
        $image->storeAs('public/indexHome/_testimonial_home/', $image->hashName());

        $testimonial_home = TestimonialHome::create([
            'testimonial_home_tag' => $request->testimonial_home_tag,
            'testimonial_home_title' => $request->testimonial_home_title,
            'testimonial_home_profile' => $image->hashName(),
            'testimonial_home_name' => $request->testimonial_home_name,
            'testimonial_home_jobtitle' => $request->testimonial_home_jobtitle,
            'testimonial_home_caption' => $request->testimonial_home_caption,
        ]);
        if($testimonial_home){
            return redirect()->route('testimonial-home-caption.index')->with('success', 'Testimonial Home created successfully');
        }else{
            return redirect()->route('testimonial-home-caption.index')->with('error', 'Testimonial Home not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialHome  $testimonialHome
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialHome $testimonialHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialHome  $testimonialHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial_home = TestimonialHome::find($id);
        return view('admin.partialsAdmin.crud-indexHome._testimonial-home.edit', compact('testimonial_home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialHome  $testimonialHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialHome $testimonial_home)
    {
        if($request->hasFile('testimonial_home_profile')){
            $image = $request->file('testimonial_home_profile');
            $image->storeAs('public/indexHome/_testimonial_home/', $testimonial_home->testimonial_home_profile);

            $testimonial_home = TestimonialHome::where('id', $testimonial_home->id)->update([
                'testimonial_home_tag' => $request->testimonial_home_tag,
                'testimonial_home_title' => $request->testimonial_home_title,
                'testimonial_home_profile' => $image->hashName(),
                'testimonial_home_name' => $request->testimonial_home_name,
                'testimonial_home_jobtitle' => $request->testimonial_home_jobtitle,
                'testimonial_home_caption' => $request->testimonial_home_caption,
            ]);
        }else{
            $testimonial_home = TestimonialHome::where('id', $request->id)->update([
                'testimonial_home_tag' => $request->testimonial_home_tag,
                'testimonial_home_title' => $request->testimonial_home_title,
                'testimonial_home_name' => $request->testimonial_home_name,
                'testimonial_home_jobtitle' => $request->testimonial_home_jobtitle,
                'testimonial_home_caption' => $request->testimonial_home_caption,
            ]);
        }

        if($testimonial_home){
            return redirect()->route('testimonial-home-caption.index')->with('success', 'Testimonial Home updated successfully');
        }else{
            return redirect()->route('testimonial-home-caption.index')->with('error', 'Testimonial Home not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialHome  $testimonialHome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial_home = TestimonialHome::find($id);
        Storage::delete('public/indexHome/_testimonial_home/'.$testimonial_home->testimonial_home_profile);
        $testimonial_home->delete();
        return redirect()->route('testimonial-home-caption.index')->with('success', 'Testimonial Home deleted successfully');
    }
}
