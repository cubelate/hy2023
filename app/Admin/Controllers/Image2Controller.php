<?php
namespace App\Admin\Controllers;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Image2Controller extends AdminController
{
    public function upload(Request $request)
    {
        $urls = [];

        foreach ($request->file() as $file) {
            $urls[] = Storage::url($file->store('public/images'));
        }

        return [
            "errno" => 0,
            "data"  => $urls,
        ];
    }
}
