<?php

namespace App\Http\Controllers;

use App\Models\HyCompany;
use App\Models\HyFormBp;
use App\Models\HyFormReservation;
use App\Models\HyFormResume;
use App\Models\HyHonor;
use App\Models\HyIndexNew;
use App\Models\HyNew;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Validation\Rules\File;
use function Nette\Utils\isNumber;
use function PHPUnit\Framework\throwException;

class MainController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {

        //$indexNews = HyIndexNew::orderBy('day', 'desc')->orderBy('sort_val', 'desc')->take(4)->get();
        
        $indexNews = HyNew::orderBy('event_day', 'desc')->orderBy('sort_val', 'desc')->where('is_top', '1')->take(4)->get();
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
        $dongcha = HyNew::where('type', '1')->orderBy('event_day', 'desc')->orderBy('id', 'desc')->take(6)->get();
        $xinwen = HyNew::where('type', '0')->orderBy('event_day', 'desc')->orderBy('id', 'desc')->take(6)->get();

        $honors = HyHonor::orderBy('sort_val', 'desc')->get();
        return view('about', ['dongcha' => $dongcha, 'xinwen' => $xinwen, 'honors' => $honors]);
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
        $news = HyNew::where('type', '0')->orderBy('is_top', 'desc')->orderBy('event_day', 'desc')->paginate($countInPage);
        return view('news', ['news' => $news]);
    }

    public function news2() {
        $countInPage = 9;
        $news = HyNew::where('type', '1')->orderBy('is_top', 'desc')->orderBy('event_day', 'desc')->paginate($countInPage);
        return view('news', ['news' => $news]);
    }

    public function detail($id) {
        $data = HyNew::find($id);

        $next = HyNew::where('event_day', '<', $data->event_day)->where('type', $data->type)->orderBy('is_top', 'desc')->orderBy('event_day', 'desc')->first();

        //
        $random3 = HyNew::all()->random(3);
        return view('detail', ['data' => $data, 'next' => $next, 'random3' => $random3]);


    }

    public function bp() {
        return view('form_bp', []);
    }

    public function job() {
        return view('job', []);
    }

    public function postBp(Request $request) {
        $request->validate([
            'name' => 'required|max:20',
            'mobile' => 'required|max:20',
            'gender' => 'required|numeric',
            'email' => 'required|max:50',
            'company' => 'required|max:100',
            'title' => 'required|max:100',
            'industry' => 'required|max:100',
            'custom_1153789' => ['required',File::types(['pdf'])
                ->max(4 * 1024),]
        ]);

        $name = $request->input("name");
        $mobile = $request->input("mobile");
        $gender = $request->input("gender");
        $email = $request->input("email");
        $company = $request->input("company");
        $title = $request->input("title");
        $type = $request->input("industry");
        $bpfile = $request->file("custom_1153789");

        $path = $bpfile->storeAs('public/bp',time() . "." .$bpfile->clientExtension());

        $path = str_replace("public/bp", "bp", $path);

        $model = new HyFormBp();
        $model->name = $name;
        $model->mobile_phone = $mobile;
        $model->type = $type;
        $model->gender = $gender;
        $model->email = $email;
        $model->company = $company;
        $model->title = $title;
        $model->bpfile = $path;
        $model->save();

        return redirect("form-bp.html")->with('status', '1');
    }

    public function reservation() {
        return view('form_reservation', []);
    }

    public function postReservation(Request $request) {
        $request->validate([
            'name' => 'required|max:20',
            'mobile' => 'required|max:20',
            'gender' => 'required|numeric',
            'email' => 'required|max:50',
            'company' => 'required|max:100',
            'custom_13114826' =>  'required|max:100',
            'custom_655378' => 'required|max:200',
        ]);

        $name = $request->input("name");
        $mobile = $request->input("mobile");
        $gender = $request->input("gender");
        $email = $request->input("email");
        $company = $request->input("company");
        $title = $request->input("title");

        $target = $request->input("custom_13114826");
        $topic = $request->input("custom_655378");

        $model = new HyFormReservation();
        $model->name = $name;
        $model->mobile_phone = $mobile;
        $model->gender = $gender;
        $model->email = $email;
        $model->company = $company;
        $model->title = $title;
        $model->target = $target;
        $model->topic = $topic;
        $model->save();

        return redirect("form-reservation.html")->with('status', '1');
    }

    public function application($type) {
        if (!is_numeric($type)) {
            abort(404);
        }

        if ($type == 1) {
            $position = "投资分析师（多赛道）";
        } else if ($type == 2) {
            $position = "企业学习发展专家";
        } else if ($type == 3) {
            $position = "基金运营";
        } else {
            abort(404);
        }

        return view('form_application', ['position' => $position]);
    }

    public function postApplication($type, Request $request) {
        if (!is_numeric($type)) {
            abort(404);
        }

        $type = intval($type);
        if ($type < 1 || $type > 3) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|max:20',
            'mobile' => 'required|max:20',
            'gender' => 'required|numeric',
            'email' => 'required|max:50',
            'custom_8022109' => ['required',File::types(['pdf', 'doc', 'docx'])
                ->max(4 * 1024),]
        ]);

        if ($type == 1) {
            $position = "投资分析师（多赛道）";
        } else if ($type == 2) {
            $position = "企业学习发展专家";
        } else if ($type == 3) {
            $position = "基金运营";
        } else {
            abort(404);
        }

        $name = $request->input("name");
        $mobile = $request->input("mobile");
        $gender = $request->input("gender");
        $email = $request->input("email");
        $file = $request->file("custom_8022109");

        $path = $file->storeAs('public/resume',time() . "." .$file->clientExtension());

        $path = str_replace("public/resume", "resume", $path);
        
        $model = new HyFormResume();
        $model->position = $position;
        $model->name = $name;
        $model->mobile_phone = $mobile;
        $model->gender = $gender;
        $model->email = $email;
        $model->file = $path;
        $model->save();


        return redirect("form-application-$type.html")->with('status', '1');
    }
    public function result() {
        return view('form_result', []);
    }
}
