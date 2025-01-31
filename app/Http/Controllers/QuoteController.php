<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    public function index()
    {
//        $quotes = Quote::all();
//        dd($quotes);

        return view('quotes/index', [
            'quotes' => DB::table('quotes')->paginate(2)
        ]);
    }


}
