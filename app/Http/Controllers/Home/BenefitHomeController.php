<?php

namespace App\Http\Controllers\IndexHomeController;

use App\Models\IndexHome\BenefitHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BenefitHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefit_homes = BenefitHome::get();
        return view('admin.partialsAdmin.crud-indexHome._benefit-home.index', compact('benefit_homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $benefit_home = BenefitHome::get();
        return view('admin.partialsAdmin.crud-indexHome._benefit-home.create', compact('benefit_home'));
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
            'benefit_home_tag' => 'required',
            'benefit_home_title' => 'required',
            'benefit_home_icon' => 'required|image|mimes:png,svg|max:2048',
            'benefit_home_subtitle' => 'required',
            'benefit_home_description' => 'required',
        ],
        [
            'benefit_home_title.required' => 'Please enter the title of the benefit',
            'benefit_home_icon.required' => 'Please enter the icon of the benefit',
            'benefit_home_icon.image' => 'The icon of the benefit must be an image',
            'benefit_home_icon.mimes' => 'The icon of the benefit must be a file of type: png,svg',
            'benefit_home_icon.max' => 'The icon of the benefit must be less than 2MB',
            'benefit_home_subtitle.required' => 'Please enter the sub title of the benefit',
            'benefit_home_description.required' => 'Please enter the description of the benefit',
        ]);

        $image = $request->file('benefit_home_icon');
        $image->storeAs('public/indexHome/_benefit_home/', $image->hashName());

        $benefit_home = BenefitHome::create([
            'benefit_home_tag' => $request->benefit_home_tag,
            'benefit_home_title' => $request->benefit_home_title,
            'benefit_home_icon' => $image->hashName(),
            'benefit_home_subtitle' => $request->benefit_home_subtitle,
            'benefit_home_description' => $request->benefit_home_description,
        ]);
        if($benefit_home){
            return redirect()->route('benefit-home-caption.index')->with('success', 'Benefit Home created successfully');
        }else{
            return redirect()->route('benefit-home-caption.index')->with('error', 'Benefit Home not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BenefitHome  $benefitHome
     * @return \Illuminate\Http\Response
     */
    public function show(BenefitHome $benefitHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BenefitHome  $benefitHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benefit_home = BenefitHome::find($id);
        return view('admin.partialsAdmin.crud-indexHome._benefit-home.edit', compact('benefit_home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BenefitHome  $benefitHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BenefitHome $benefit_home)
    {
        if($request->hasFile('benefit_home_icon')){
            $image = $request->file('benefit_home_icon');
            $image->storeAs('public/indexHome/_benefit_home/', $benefit_home->benefit_home_icon);

            $benefit_home = BenefitHome::where('id', $request->id)->update([
                'benefit_home_tag' => $request->benefit_home_tag,
                'benefit_home_title' => $request->benefit_home_title,
                'benefit_home_icon' => $image->hashName(),
                'benefit_home_subtitle' => $request->benefit_home_subtitle,
                'benefit_home_description' => $request->benefit_home_description,
            ]);
        }else{
            $benefit_home = BenefitHome::where('id', $request->id)->update([
                'benefit_home_tag' => $request->benefit_home_tag,
                'benefit_home_title' => $request->benefit_home_title,
                'benefit_home_subtitle' => $request->benefit_home_subtitle,
                'benefit_home_description' => $request->benefit_home_description,
            ]);
        }

        if($benefit_home){
            return redirect()->route('benefit-home-caption.index')->with('success', 'Benefit Home updated successfully');
        }else{
            return redirect()->route('benefit-home-caption.index')->with('error', 'Benefit Home not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BenefitHome  $benefitHome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benefit_home = BenefitHome::findOrFail($id);
        Storage::delete('public/indexHome/_benefit_home/'.$benefit_home->benefit_home_icon);
        $benefit_home->delete();
        return redirect()->route('benefit-home-caption.index')->with('success', 'Benefit Home deleted successfully');
    }
}
