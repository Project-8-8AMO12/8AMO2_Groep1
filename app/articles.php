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
        $articles = DB::table('articles')->select(['page_id', 'type', 'title', 'subtitle', 'text', 'img_url', 'author', 'pos', 'created_at', 'updated_at'])->orderBy('created_at', 'DESC')->get();
        return $articles;
    }

    public function editArticles($post) {

        $pageId = $post['page_id'];
        $titel = $post['titel'];
        $subtitel = $post['subtitel'];
        $content = $post['text'];
        $author = $post['author'];
        $editPermission = $post['editPermission'];
        $imgUrl = $post['img_url'];
        $pos = $post['pos'];
        $date = new DateTime('now');

        if (request('submit-artikel') === 'submit-artikel') {

            $data = array('page_id'=>$pageId, 'type'=>'Article', 'title'=>$titel, 'subtitle'=>$subtitel, 'text'=>$content,
                'img_url'=>$imgUrl, 'author'=>$author, 'edit_permission_lvl'=>$editPermission, 'pos'=>100, 'created_at'=>$date, 'updated_at'=>$date);

            DB::table('articles')->insert($data);
            return Route::get('/adminpanel', 'PagesController@adminpanel');

        } elseif (request('submit-alert') === 'submit-alert') {

            $data = array('page_id'=>$pageId, 'type'=>'Alert', 'title'=>$titel, 'subtitle'=>$subtitel, 'text'=>$content,
                'img_url'=>$imgUrl, 'author'=>$author, 'edit_permission_lvl'=>$editPermission, 'pos'=>100, 'created_at'=>$date, 'updated_at'=>$date);

            DB::table('articles')->insert($data);
            return Route::get('/adminpanel', 'PagesController@adminpanel');

        } elseif (request('submit-update') === 'submit-update') {

            $data = array('page_id'=>$pageId, 'type'=>'Article', 'title'=>$titel, 'subtitle'=>$subtitel, 'text'=>$content,
                'img_url'=>$imgUrl, 'author'=>$author, 'edit_permission_lvl'=>$editPermission, 'pos'=>$pos, 'updated_at'=>$date);

            DB::table('articles')->where('id')->update($data);
            return Route::get('/adminpanel', 'PagesController@adminpanel');

        } elseif (request('submit-delete') === 'submit-delete') {

            DB::table('articles')->where('id', '1')->delete();
            return Route::get('/adminpanel', 'PagesController@adminpanel');
        }
    }
}
