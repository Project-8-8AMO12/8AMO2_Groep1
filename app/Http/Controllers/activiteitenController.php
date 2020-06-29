<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class activiteitenController extends Controller
{
    public function getContent()
    {
        $article = DB::table('articles')->select(['page_id', 'type', 'title', 'subtitle', 'text', 'img_url', 'author', 'created_at', 'updated_at'])->where('page_id', '8')->orderBy('created_at', 'DESC')->get();
        return view('pages.Activiteiten', ['article' => $article]);
    }
}
