<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        # code...
        return view('admin.dashboard');
    }

    public function addCategory()
    {
        # code...
        return view('admin.add_category');
    }

    public function addProduct()
    {
        # code...
        return view('admin.add_product');
    }

    public function addSlider()
    {
        # code...
        return view('admin.add_slider');
    }

    public function listCategories()
    {
        # code...
        return view('admin.all_categories');
    }

    public function listProducts()
    {
        # code...
        return view('admin.all_product');
    }

    public function listSliders()
    {
        # code...
        return view('admin.all_slider');
    }
}
