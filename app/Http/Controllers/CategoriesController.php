<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service;

class CategoriesController extends Controller
{
    public function filter ( $category ) {
        
        $category_row = Category::where('name', $category)->first();

        $servicesCategory = Service::where('category_id', $category_row->id)
            ->where('status', \App\Service::PUBLISHED)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        return view('categories', compact('servicesCategory'));
    }
}
