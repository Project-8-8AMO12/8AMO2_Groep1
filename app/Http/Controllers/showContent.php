<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showContent extends Controller
{
    public function showContentNow(Request $request) {
        $content = DB::table('articles')
            ->select('title', 'text')
            ->get();

        return view('pages.bijenstal');

    }
}
