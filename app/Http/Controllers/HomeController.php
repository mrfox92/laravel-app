<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;

class HomeController extends Controller
{

    // $categories = Category::all()->pluck('name');

        // $services = \App\Service::withCount(['customers'])
        //     ->with('category', 'seller', 'reviews')
        //     ->where('status', \App\Service::PUBLISHED)
        //     ->latest();

        // dd( $services );

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $services = Service::with('category', 'seller', 'reviews')
            ->where('status', \App\Service::PUBLISHED)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

         return view('home', compact('services'));
    }
}
