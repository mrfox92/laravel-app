<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Seller;

class SellerController extends Controller
{
    public function services () {
        $services = Service::where('seller_id', auth()->user()->seller->id)
            ->paginate(2);
        // dd( $services );

        return view('sellers.services', compact('services'));
    }

    public function show ($slug) {

        $service = Service::where('slug', $slug)->first();

        return view('sellers.details', compact('service'));
    }

    public function profile (Seller $seller ) {
        // dd( $seller );
        $services = Service::with(['category'])->where('seller_id', $seller->id)->get();
        // dd( $services );
        return view('sellers.profile', compact('seller', 'services'));
    }

    public function analytics () {
        return view('sellers.estadisticas');
    }

    public function chats () {
        return view('sellers.chats');
    }

    public function contacts () {
        return view('sellers.contacts');
    }

    public function wishlist () {
        return view('sellers.wishlist');
    }
}
