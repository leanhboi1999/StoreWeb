<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function home_page()
    {
        $all_product = DB::table('tbl_product')->get();
        $manage_product = view('pages.index')->with('all_product', $all_product);
        return view('layouts.app')->with('pages.index', $manage_product);

        // return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }
}
