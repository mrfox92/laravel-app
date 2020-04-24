<?php
namespace App\Helpers;

class Helper {
    
    public static function sidebarItemSelected ($sidebarItem) {
        return request()->route()->getName() === $sidebarItem ? 'mm-active' : '';
    }
}