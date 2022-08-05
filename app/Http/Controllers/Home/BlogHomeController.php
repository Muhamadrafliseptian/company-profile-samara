<?php

namespace App\Http\Controllers\IndexHomeController;

use Illuminate\Http\Request;
use App\Models\IndexHome\BlogHome;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BlogHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_homes = BlogHome::get();
        return view('admin.partialsAdmin.crud-indexHome._blog-home.index', compact('blog_homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_home = BlogHome::get();
        return view('admin.partialsAdmin.crud-indexHome._blog-home.create', compact('blog_home'));
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
            'blog_home_tag' => 'required',
            'blog_home_title' => 'required',
            'blog_home_text_title' => 'required',
            'blog_home_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'blog_home_subtitle' => 'required',
            'blog_home_description' => 'required',
        ],[
            'blog_home_tag.required' => 'Please enter the tag of the blog',
            'blog_home_title.required' => 'Please enter the title of the blog',
            'blog_home_text_title.required' => 'Please enter the text title of the blog',
            'blog_home_img.required' => 'Please enter the image of the blog',
            'blog_home_img.image' => 'The image of the blog must be an image',
            'blog_home_img.mimes' => 'The image of the blog must be a file of type: jpeg,png,jpg,svg',
            'blog_home_img.max' => 'The image of the blog must be less than 2MB',
            'blog_home_subtitle.required' => 'Please enter the subtitle of the blog',
            'blog_home_description.required' => 'Please enter the description of the blog',
        ]);

        $image = $request->file('blog_home_img');
        $image->storeAs('public/indexHome/_blog_home/', $image->hashName());

        $blog_home = BlogHomeController::create([
            'blog_home_tag' => $request->blog_home_tag,
            'blog_home_title' => $request->blog_home_title,
            'blog_home_text_title' => $request->blog_home_text_title,
            'blog_home_img' => $image->hashName(),
            'blog_home_subtitle' => $request->blog_home_title_subtitle,
            'blog_home_descripsi' => $request->blog_home_descripsi,
        ]);

        if($blog_home){
            return redirect()->route('blog-home-caption.index')->with('success', 'Testimonial Home created successfully');
        }else{
            return redirect()->route('blog-home-caption.index')->with('error', 'Testimonial Home not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IndexHome\BlogHome  $blogHome
     * @return \Illuminate\Http\Response
     */
    public function show(BlogHome $blogHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndexHome\BlogHome  $blogHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_home = BlogHome::findOrFail($id);
        return view('admin.partialsAdmin.crud-indexHome._blog-home.edit', compact('blog_home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IndexHome\BlogHome  $blogHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogHome $blog_home)
    {
        if($request->hasFile('blog_home_img')){
            $image = $request->file('blog_home_img');
            $image->storeAs('public/indexHome/_blog_home/', $blog_home->blog_home_img);

            $blog_home = BlogHome::where('id', $request->id)->update([
                'blog_home_tag' => $request->blog_home_tag,
                'blog_home_title' => $request->blog_home_title,
                'blog_home_text_title' => $request->blog_home_text_title,
                'blog_home_img' => $image->hashName(),
                'blog_home_subtitle' => $request->blog_home_subtitle,
                'blog_home_description' => $request->blog_home_description,
            ]);
        }else{
            $blog_home = BlogHome::where('id', $request->id)->update([
                'blog_home_tag' => $request->blog_home_tag,
                'blog_home_title' => $request->blog_home_title,
                'blog_home_text_title' => $request->blog_home_text_title,
                'blog_home_subtitle' => $request->blog_home_subtitle,
                'blog_home_description' => $request->blog_home_description,
            ]);
        }

        if($blog_home){
            return redirect()->route('blog-home-caption.index')->with('success', 'Blog Home updated successfully');
        }else{
            return redirect()->route('blog-home-caption.index')->with('error', 'Blog Home not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndexHome\BlogHome  $blogHome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_home = BlogHome::find($id);
        Storage::delete('public/indexHome/_blog_home/'.$blog_home->blog_home_img);
        $blog_home->delete();
        return redirect()->route('blog-home-caption.index')->with('success', 'Blog Home deleted successfully');
    }
}
