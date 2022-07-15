<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_deleted', 0)->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }


public function store(SliderStoreRequest $request)
{
    if($request->hasFile('slider_image'))
    {
        $image = $request->file('slider_image');
        $name = Str::random(16) . '.' . $image->getClientOriginalExtension();
        $directory = public_path('img/slider_images');
        $image->move($directory, $name);
    }

    $slider = new Slider();

    $slider->title = $request->slider_title;
    $slider->image = $name;

   if ($slider->save())
   {
       return redirect()->route('slider.index')->with('success','Melumat ugurla elave olundu!!!');
   }
   else{
       return redirect()->route('slider.create')->with('errors','Xeta bas verdi!!!');
   }
}

public function edit($id)
    {
        $slider = Slider::where('id',$id)->first();
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(SliderStoreRequest $request)
    {
        $slider = Slider::where('id',$request->id_slider)->update([
            'title'      => $request->slider_title,
            
        ]);
        if ($slider)
        {
            return redirect()->route('slider.index')->with('success','Melumat ugurla redakte olundu!!!');
        }
        else{
            return redirect()->route('slider.index')->with('errors','Xeta bas verdi!!!');
        }
    }

    public function delete(Request $request){

        $slider = Slider::where('id',$request->id)->update([
            'is_deleted'      => 1
        ]);
                if($slider){
                    return "ok";
                }
                else{
                    return "no";
                }
            }

}