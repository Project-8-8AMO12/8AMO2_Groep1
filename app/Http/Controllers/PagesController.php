<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\Console\Helper\Table;


class PagesController extends Controller
{

    public function index(){
    $articles = articles::getArticles(1);
    return view('pages.home')->with("articles", $articles);
}

    public function indexActiviteiten(){
        $articles = articles::getArticles(2);
        return view('pages.activiteiten')->with("articles", $articles);
    }

    public function Indexbijengezondheid(){
        $articles = articles::getArticles(3);
        return view('pages.bijengezondheid')->with("articles", $articles);
    }

    public function indexBijenstal(){
        $articles = articles::getArticles(4);
        return view('pages.bijenstal')->with("articles", $articles);
    }

    public function indexContact(){
        $articles = articles::getArticles(5);
        return view('pages.contact')->with("articles", $articles);
    }

    public function indexCursussen(){
        $articles = articles::getArticles(6);
        return view('pages.cursussen')->with("articles", $articles);
    }

    public function indexFotosvideos(){
        $articles = articles::getArticles(7);
        return view('pages.fotosvideos')->with("articles", $articles);
    }

    public function indexLidworden(){
        $articles = articles::getArticles(8);
        return view('pages.lidworden')->with("articles", $articles);
    }

    public function indexNieuws(){
        $articles = articles::getArticles(9);
        return view('pages.nieuws')->with("articles", $articles);
    }

    public function indexVereniging(){
        $articles = articles::getArticles(10);
        return view('pages.vereniging')->with("articles", $articles);
    }

    public function adminpanel(){
        $articles = articles::getAllArticles();
        return view('pages.cms')->with("articles", $articles);
    }

    public function editPost(Request $request){

        if ($request->has('submit-edit')) {

            $size = count(collect($request)->get('id'));
            for ($i = 0; $i < $size; $i++)
            {
                $article = articles::Find($request->get('id')[$i]);
                $article->page_id = $request->input('page_id')[$i];
                $article->title = $request->input('title')[$i];
                $article->subtitle = $request->input('subtitle')[$i];
                $article->text = $request->input('text')[$i];
                $article->pos = $request->input('position')[$i];
                $article->save();
            }

            $articles = articles::getAllArticles();
            return view('pages.cms')->with("articles", $articles);

        }

        if ($request->has('submit-delete')) {

            $size= count(collect($request)->get('id'));
            $offset = $size - 1;

            $article = articles::Find($request->get('id')[$offset]);
            $article->delete();

            $articles = articles::getAllArticles();
            return view('pages.cms')->with("articles", $articles);
        }

        if ($request->has('submit-artikel') || $request->has('submit-alert')) {
            if ($request->has('submit-artikel')) {
                $type = "Article";
            } else {
                $type = "Alert";
            }

            $pageId = $request->input('page_id');
            $titel = $request->input('titel');
            $id = $request->input('id');
            $subtitel = $request->input('subtitel');
            $content = $request->input('text');
            $author = "comming soon";
            $editPermission = 1;
            $pos = 0;
            $imgUrl = "soon";
            $data = array('page_id'=>$pageId, 'title'=>$titel, 'subtitle'=>$subtitel, 'text'=>$content, 'img_url'=>$imgUrl, 'author'=>$author, 'edit_permission_lvl'=>$editPermission, 'pos'=>$pos, 'type'=>$type, 'id'=>$id);

            $article = new articles();
            $article->addArticles($data);

            $articles = articles::getAllArticles();
            return view('pages.cms')->with("articles", $articles);
        }
    }
}
