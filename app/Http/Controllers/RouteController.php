<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobcategory;
use App\PriceRange;
use App\User;
use DB;
use Auth;
use Illuminate\Pagination\Paginator;

class RouteController extends Controller
{
    public function jobcate() {
        //$cats = DB::table('jobcategories')->get()->paginate(5);
        $cats = Jobcategory::all();
        //dd($cat);
        
        return view('pages.jobscategory', ['cats'=> $cats]);

    }

    public function productcate() {

    }

    public function viewjob($catname) {
        return view('pages.bid')->with('catname', $catname);
    }

    public function Viewads() {
        $cats = Jobcategory::all();
        $pricerange = PriceRange::all();
        //dd($cats);
        return view('pages.adsPage', [
            'cats'=>$cats,
            'pricerange'=> $pricerange
            ]);
    }

    public function index() {
        //dd('route');
        return view('pages.dashboard');
    }
}
