<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DateTime;

class articles extends Model
{
    public static function getArticles($page_id)
    {
        $articles = DB::table('articles')->select(['page_id', 'type', 'title', 'subtitle', 'text', 'img_url', 'author', 'pos', 'created_at', 'updated_at'])->where('page_id', $page_id)->orderBy('created_at', 'DESC')->get();
        return $articles;
    }

    public static function getAllArticles()
    {
        $articles = DB::table('articles')->select(['id', 'page_id', 'type', 'title', 'subtitle', 'text', 'img_url', 'author', 'pos', 'created_at', 'updated_at'])->orderBy('created_at', 'DESC')->get();
        return $articles;
    }

    public function addArticles($post) {
        DB::table('articles')->insert($post);
    }
}
