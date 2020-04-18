<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
    	return view("pages.index");  //home page
    }

        public function contact()
    {
    	return view("pages.contact");  //contact page
    }


          public function products()
    {
    	return view("pages.product.index");  //All Products page
    }

            public function show()
    {
    	return view("pages.product.show");  //single product page
    }

            public function search()
    {
    	return view("pages.product.search");  //search page
    }
}
