<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('routeIs')) {
    function routeIs($route = NULL)
    {
        $routeName = Route::currentRouteName();
        if ($route) {
            if (is_array($route)) {
                return in_array($routeName, $route) ? TRUE : FALSE;
            } else {
                return $routeName == $route ? TRUE : FALSE;
            }
        }
        return $routeName;
    }
}