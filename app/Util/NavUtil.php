<?php
namespace App\Util;


use Illuminate\Support\Facades\Request;

class NavUtil
{
    static public function getItemClass($itemPath) {
        $currentPath = Request::getPathInfo();

        $class = "nav_item";
        if ($currentPath == $itemPath) {
            $class .= " active";
        }

        return $class;
    }
}
