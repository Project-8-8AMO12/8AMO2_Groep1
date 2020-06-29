<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{

    public function index(){

        // Read value from Model method
        $articles = articles::getArticles(1);

        // Pass to view
        return view('pages.home')->with("articles", $articles);
    }

    public function adminpanel(){

        // Read value from Model method
        $articles = articles::getAllArticles();

        // Pass to view
        return view('pages.cms')->with("articles", $articles);
    }

    public function editPost(Request $request){

        $article = new articles();
        $pageId = $request->input('page_id');
        $titel = $request->input('titel');
        $subtitel = $request->input('subtitel');
        $content = $request->input('text');
        $author = "comming soon";
        $editPermission = 1;
        $pos = $request->input('pos');
        $imgUrl = "comming soon";

        $data = array('page_id'=>$pageId, 'titel'=>$titel, 'subtitel'=>$subtitel, 'text'=>$content,
            'img_url'=>$imgUrl, 'author'=>$author, 'editPermission'=>$editPermission, 'pos'=>$pos);
        $article->editArticles($data);
    }
}
