<?php
namespace App\Helpers;

class Helper {
    
    public static function sidebarItemSelected ($sidebarItem) {
        return request()->route()->getName() === $sidebarItem ? ' mm-active' : '';
    }

    public static function uploadFile($key, $path) {
        request()->file($key)->store($path);    //  sube el archivo y lo guarda
        return request()->file($key)->hashName();   //  retornamos el nombre que ha guardado
    }
}