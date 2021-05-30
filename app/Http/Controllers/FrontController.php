<?php

namespace App\Http\Controllers;

use App\Models\Front;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function homePage()
    {
        $front = Front::all()->last();
        return view('CMS.front.home_page',compact('front'));
    }

    public function storeHomePage(Request $request)
    {
        $front = new Front();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('frontImages/'), $imageName);
            $front ->home_page_image=($imageName);
        }
        $front->save();
        session()->flash('Images_Updated');
        return redirect()->route('homePage');
    }


    public function projectsPage()
    {
        $front = Front::all()->last();
        return view('CMS.front.projects_page',compact('front'));
    }

    public function storeProjectsPage(Request $request)
    {
        $front = new Front();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('frontImages/'), $imageName);
            $front ->projects_page_image=($imageName);
        }
        $front->save();
        session()->flash('Images_Updated');
        return redirect()->route('homePage');
    }


    public function financiersPage()
    {

    }


    public function entrepreneursPage()
    {

    }


    public function aboutPage()
    {

    }


    public function howItWorkPage()
    {
        $front = Front::all()->last();
        return view('CMS.front.how_it_work_page',compact('front'));
    }

    public function storeHowItWorkPage(Request $request)
    {
        $front = new Front();
        $front->how_it_work_text_1=$request->get('how_it_work_text_1');
        $front->how_it_work_text_2=$request->get('how_it_work_text_2');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('frontImages/'), $imageName);
            $front ->how_it_work_image=($imageName);
        }
        $front->save();
        session()->flash('Images_Updated');
        return redirect()->route('howItWorkPage');
    }
}
