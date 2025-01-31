<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin/index');// resources\views\admin\index.blade.php
    }

    public function quote()
    {
        return view('admin/quote');
    }

}
