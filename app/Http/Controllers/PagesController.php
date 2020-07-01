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

        if ($request->has('submit-edit')) {

            $size = count(collect($request)->get('title'));
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
            return $request->all();
        }

        if ($request->has('submit-artikel') || $request->has('submit-alert')) {
            if ($request->has('submit-artikel')) {
                $type = "Article";
            } else {
                $type = "Alert";
            }

            $pageId = $request->input('page_id');
            $titel = $request->input('titel');
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
