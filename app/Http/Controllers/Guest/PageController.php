<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $icons = [
            [
                "src" => "buy-comics-digital-comics.png",
                "title" => "Digital Comics"
            ],
            [
                "src" => "buy-comics-merchandise.png",
                "title" => "Merchandise"
            ],
            [
                "src" => "buy-comics-shop-locator.png",
                "title" => "Shop Locator"
            ],
            [
                "src" => "buy-comics-subscriptions.png",
                "title" => "Subscriptions"
            ],
            [
                "src" => "buy-dc-power-visa.svg",
                "title" => "Power Visa"
            ]
        ];
    
    
        return view('home', compact('icons'));
    }
}
