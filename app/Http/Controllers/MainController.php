<?php

namespace App\Http\Controllers;

use App\Models\HyCompany;
use App\Models\HyIndexNew;
use App\Models\HyNew;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {

        $indexNews = HyIndexNew::orderBy('day', 'desc')->orderBy('sort_val', 'desc')->take(4)->get();
        return view('index', ['indexNews' => $indexNews]);
    }

    public function case() {


        $all = HyCompany::orderBy('sort_val', 'desc')->orderBy('id', 'asc')->get()->toArray();

        $bdt = array_filter($all, function ($element){
            return $element['type'] == 1;
        });

        $yyszh = array_filter($all, function ($element){
            return $element['type'] == 2;
        });

        $znzd = array_filter($all, function ($element){
            return $element['type'] == 3;
        });

        $szny = array_filter($all, function ($element){
            return $element['type'] == 4;
        });
        return view('case', ['all' => $all, 'bdt'=>$bdt, 'yyszh' => $yyszh, 'znzd' => $znzd, 'szny' => $szny]);
    }

    public function case2() {
        return view('case2');
    }

    public function about() {
        $dongcha = HyNew::where('type', '1')->orderBy('event_day', 'desc')->orderBy('id', 'desc')->take(4)->get();
        $xinwen = HyNew::where('type', '0')->orderBy('event_day', 'desc')->orderBy('id', 'desc')->take(6)->get();
        
        return view('about', ['dongcha' => $dongcha, 'xinwen' => $xinwen]);
    }

    public function team() {
        return view('team');
    }

    public function contact() {

        return view('contact');
    }

    public function empower() {
        return view('empower');
    }

    public function news() {
        $countInPage = 9;
        $news = HyNew::orderBy('event_day', 'desc')->orderBy('id', 'desc')->paginate($countInPage);
        return view('news', ['news' => $news]);
    }

    public function detail($id) {
        $data = HyNew::find($id);

        $next = HyNew::where('id', '>', $id)->first();

        //
        $random3 = HyNew::all()->random(3);
        return view('detail', ['data' => $data, 'next' => $next, 'random3' => $random3]);


    }
}
