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

    public function bijenstalArticles(){

        // Read value from Model method
        $articles = articles::getArticles(9);

        // Pass to view
        return view('pages.bijenstal')->with("articles", $articles);
    }

    public function verenigingArticles(){

        // Read value from Model method
        $articles = articles::getArticles(4);

        // Pass to view
        return view('pages.vereniging')->with("articles", $articles);
    }

    public function cursussenArticles(){

        // Read value from Model method
        $articles = articles::getArticles(3);

        // Pass to view
        return view('pages.cursussen')->with("articles", $articles);
    }

    public function winkelArticles(){

        // Read value from Model method
        $articles = articles::getArticles(10);

        // Pass to view
        return view('pages.winkel')->with("articles", $articles);
    }

    public function fotosvideosArticles(){

        // Read value from Model method
        $articles = articles::getArticles(12);

        // Pass to view
        return view('pages.fotosvideos')->with("articles", $articles);
    }

    public function activiteitenArticles(){

        // Read value from Model method
        $articles = articles::getArticles(10);

        // Pass to view
        return view('pages.activiteiten')->with("articles", $articles);
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
