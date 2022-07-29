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
        $carousel_captions = CarouselCaption::latest()->paginate(10);
        return view('admin.partialsAdmin.crud-indexHome.index', compact('carousel_captions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $carousel_caption = CarouselCaption::get();
        return view('admin.partialsAdmin.crud-indexHome.create', compact('carousel_caption'));
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
            'carousel_caption_title_1' => 'required',
            'carousel_caption_title_2' => 'required',
            'carousel_caption_title_3' => 'required',
            'carousel_caption_img_1' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'carousel_caption_img_2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'carousel_caption_img_3' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ],
        [
            'carousel_caption_title_1.required' => 'Please enter the title of the first caption',
            'carousel_caption_title_2.required' => 'Please enter the title of the second caption',
            'carousel_caption_title_3.required' => 'Please enter the title of the third caption',
            'carousel_caption_img_1.required' => 'Please enter the image of the first caption',
            'carousel_caption_img_2.required' => 'Please enter the image of the second caption',
            'carousel_caption_img_3.required' => 'Please enter the image of the third caption',
            'carousel_caption_img_1.image' => 'The image of the first caption must be an image',
            'carousel_caption_img_2.image' => 'The image of the second caption must be an image',
            'carousel_caption_img_3.image' => 'The image of the third caption must be an image',
            'carousel_caption_img_1.mimes' => 'The image of the first caption must be a file of type: jpeg,png,jpg,svg',
            'carousel_caption_img_2.mimes' => 'The image of the second caption must be a file of type: jpeg,png,jpg,svg',
            'carousel_caption_img_3.mimes' => 'The image of the third caption must be a file of type: jpeg,png,jpg,svg',
            'carousel_caption_img_1.max' => 'The image of the first caption must be less than 2MB',
            'carousel_caption_img_2.max' => 'The image of the second caption must be less than 2MB',
            'carousel_caption_img_3.max' => 'The image of the third caption must be less than 2MB',
        ]);


            $image = $request->file('carousel_caption_img_1');
            $image->storeAs('public/indexHome', $image->getClientOriginalName());

            $image2 = $request->file('carousel_caption_img_2');
            $image2->storeAs('public/indexHome', $image2->getClientOriginalName());

            $image3 = $request->file('carousel_caption_img_3');
            $image3->storeAs('public/indexHome', $image3->getClientOriginalName());

            DB::beginTransaction();
            $carousel_caption = CarouselCaption::create([
                'carousel_caption_title_1' => $request->carousel_caption_title_1,
                'carousel_caption_title_2' => $request->carousel_caption_title_2,
                'carousel_caption_title_3' => $request->carousel_caption_title_3,
                'carousel_caption_img_1' => $image->getClientOriginalName(),
                'carousel_caption_img_2' => $image2->getClientOriginalName(),
                'carousel_caption_img_3' => $image3->getClientOriginalName(),
            ]);
            DB::commit();

            // $carousel_caption = CarouselCaption::create($request->all());

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
    public function show($id)
    {
        $carousel_caption = CarouselCaption::find($id);
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
        return view('admin.partialsAdmin.crud-indexHome.edit', compact('carousel_caption'));
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

        if($request->hasFile('carousel_caption_img_1')){
            $image = $request->file('carousel_caption_img_1');
            $image->storeAs('public/indexHome', $image->getClientOriginalName());
        Storage::delete('public/indexHome/'.$carousel_caption->carousel_caption_img_1);
            $carousel_caption->update([
            'carousel_caption_title_1' => $request->carousel_caption_title_1,
            'carousel_caption_img_1' => $image->getClientOriginalName(),
            ]);
    } else {
        $carousel_caption->update([
            'carousel_caption_title_1' => $request->carousel_caption_title_1,
            'carousel_caption_img_1' => $carousel_caption->carousel_caption_img_1,
        ]);
    }

        if($request->hasFile('carousel_caption_img_2')){
            $image = $request->file('carousel_caption_img_2');
            $image->storeAs('public/indexHome', $image->getClientOriginalName());
            Storage::delete('public/indexHome/'.$carousel_caption->carousel_caption_img_2);

            $carousel_caption->update([
                'carousel_caption_title_2' => $request->carousel_caption_title_2,
                'carousel_caption_img_2' => $image->getClientOriginalName(),
            ]);
        } else {
            $carousel_caption->update([
                'carousel_caption_title_2' => $request->carousel_caption_title_2,
            ]);
        }

        if($request->hasFile('carousel_caption_img_3')){
            $image = $request->file('carousel_caption_img_3');
            $image->storeAs('public/indexHome', $image->getClientOriginalName());
        Storage::delete('public/indexHome/'.$carousel_caption->carousel_caption_img_3);
            $carousel_caption->update([
            'carousel_caption_title_3' => $request->carousel_caption_title_3,
            'carousel_caption_img_3' => $image->getClientOriginalName(),
            ]);
    } else {
        $carousel_caption->update([
            'carousel_caption_title_3' => $request->carousel_caption_title_3,
            'carousel_caption_img_3' => $carousel_caption->carousel_caption_img_3,
        ]);
    }



            // $carousel_caption->update($request->all());
            // return redirect()->route('carousel-caption.index');
            return redirect()->route('carousel-caption.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $carousel_caption = CarouselCaption::find($request->id);
        $carousel_caption->delete();
        if($carousel_caption){
            return redirect()->route('carousel_caption.index')->with('success', 'Carousel Caption deleted successfully');
        }else{
            return redirect()->route('carousel_caption.index')->with('error', 'Carousel Caption not deleted');
        }
    }
}
