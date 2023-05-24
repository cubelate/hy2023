<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Models\HyNew;
use App\Models\HyNewOld;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/case.html', [MainController::class, 'case']);
Route::get('/case2.html', [MainController::class, 'case2']);
Route::get('/about.html', [MainController::class, 'about']);
Route::get('/contact.html', [MainController::class, 'contact']);
Route::get('/empower.html', [MainController::class, 'empower']);
Route::get('/team.html', [MainController::class, 'team']);
Route::get('/news.html', [MainController::class, 'news']);
Route::get('/news_detail_{id}.html', [MainController::class, 'detail']);

Route::get('/result.html', [MainController::class, 'result']);

Route::get('/form-bp.html', [MainController::class, 'bp']);
Route::post('/form-bp.html', [MainController::class, 'postBp']);

Route::get('/job.html', [MainController::class, 'job']);


Route::get('/form-reservation.html', [MainController::class, 'reservation']);
Route::post('/form-reservation.html', [MainController::class, 'postReservation']);

Route::get('/form-application-{type}.html', [MainController::class, 'application']);
Route::post('/form-application-{type}.html', [MainController::class, 'postApplication']);

/*
Route::get('/donews', function() {
    $models = HyNewOld::all();
    foreach ($models as $m) {
        $n = new HyNew();
        $n->type = 0;
        $n->title = $m->title;
        $n->title_in_list = $m->title_in_list;
        $n->content = str_replace(["http://cms.huacapital.com//uploads", "http://www.huacapital.com//uploads"], "uploads", $m->content);
        $n->event_day = $m->event_day;
        $n->sort_val = $m->sort_val;
        $n->save();
    }

    echo "Done";
});
*/