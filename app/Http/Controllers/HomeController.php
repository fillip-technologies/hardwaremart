<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        return view('pages.home');

    }

    public function loginPage(){
        return view('pages.login');

    }

    public function registerPage(){
        return view('pages.register');

    }

    public function wishlistPage(){
        return view('pages.wishlist');

    }

    public function cartPage(){
        return view('pages.cart');

    }

    public function checkoutPage(){
        return view('pages.checkout');

    }

    public function completeOrderPage(){
        return view('pages.complete-order');

    }

    public function viewProductPage(){
        return view('pages.view-product');

    }

    public function productDescriptionPage(){
        return view('pages.product-description');

    }
    
    public function accountOverviewPage(){
        return view('pages.account-overview');

    }

    public function cancelOrderPage(){
        return view('pages.cancelorder');

    }
}

