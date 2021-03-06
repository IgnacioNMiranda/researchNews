<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\InvestigationGroup;
use App\Product;

class PageController extends Controller
{
    public function investigation_groups(){
        $invGroups = InvestigationGroup::orderBy('id','DESC')->paginate(12);

        return view('welcome',compact('invGroups'));
    }
    
    public function showInvestigationGroup($slug){
        $invGroup = InvestigationGroup::where('slug',$slug)->first();

        return view('Investigation_groups.showDetail', compact('invGroup'));
    }

    public function ShowAbout(){
        return view('About_us');
    }

    public function helpVideos(){
        return view('helpVideos');
    }

}
