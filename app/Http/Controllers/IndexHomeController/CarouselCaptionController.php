<?php

namespace App\Http\Controllers\IndexHomeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\IndexHome\CarouselCaption;
use JeroenNoten\LaravelAdminLte\View\Components\Widget\Card;

class CarouselCaptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel_captions = CarouselCaption::get();
        return view('admin.partialsAdmin.crud-indexHome._carouselcaption.index', compact('carousel_captions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $carousel_caption = CarouselCaption::get();
        return view('admin.partialsAdmin.crud-indexHome._carouselcaption.create', compact('carousel_caption'));
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
            'carousel_caption_title' => 'required',
            'carousel_caption_title' => 'required',
            'carousel_caption_title' => 'required',
            'carousel_caption_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ],
        [
            'carousel_caption_title.required' => 'Please enter the title of the first caption',
            'carousel_caption_img.required' => 'Please enter the image of the first caption',
            'carousel_caption_img.image' => 'The image of the first caption must be an image',
            'carousel_caption_img.mimes' => 'The image of the first caption must be a file of type: jpeg,png,jpg,svg',
            'carousel_caption_img.max' => 'The image of the first caption must be less than 2MB',
        ]);


            $image = $request->file('carousel_caption_img');
            $image->storeAs('public/indexHome', $image->hashName());

            DB::beginTransaction();
            $carousel_caption = CarouselCaption::create([
                'carousel_caption_title' => $request->carousel_caption_title,
                'carousel_caption_img' => $image->hashName(),
            ]);
            DB::commit();

            if($carousel_caption){
                return redirect()->route('carousel-caption.index')->with('success', 'Carousel Caption created successfully');
            }else{
                return redirect()->route('carousel-caption.index')->with('error', 'Carousel Caption not created');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $carousel_caption = CarouselCaption::get();
        return view('admin._showIndexHome.show-index', compact('carousel_caption'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel_caption = CarouselCaption::findOrFail($id);
        return view('admin.partialsAdmin.crud-indexHome._carouselcaption.edit', compact('carousel_caption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarouselCaption $carousel_caption)
    {

        if($request->hasFile('carousel_caption_img')){
            $image = $request->file('carousel_caption_img');
            $image->storeAs('public/indexHome', $image->getClientOriginalName());
            Storage::delete('public/indexHome/'.$carousel_caption->carousel_caption_img);

            $carousel_caption->update([
            'carousel_caption_title' => $request->carousel_caption_title,
            'carousel_caption_img' => $image->getClientOriginalName(),
            ]);
    } else {
        $carousel_caption->update([
            'carousel_caption_title' => $request->carousel_caption_title,
            'carousel_caption_img' => $carousel_caption->carousel_caption_img,
        ]);
    }
            return redirect()->route('carousel-caption.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $carousel_caption = CarouselCaption::findOrFail($id);
        Storage::delete('public/indexHome/'.$carousel_caption->carousel_caption_img);
        $carousel_caption->delete();

            return redirect()->route('carousel-caption.index');
    }
}
