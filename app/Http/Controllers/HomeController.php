<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function getArticles()
    {
        $articles = DB::table('articles')->select(['page_id', 'type', 'title', 'subtitle', 'text', 'img_url', 'author', 'created_at', 'updated_at'])->where('page_id', '1')->orderBy('created_at', 'DESC')->get();
        return view('pages.home', ['articles' => $articles]);
    }
}
