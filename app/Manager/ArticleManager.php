<?php 

namespace App\Manager;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleManager 
{  
    public function build(Article $article, Request $request)
    {
        $article->title = $request->get('title');
        $article->subtitle = $request->get('subtitle');
        $article->content = $request->get('content');
        $article->category_id = $request->get('category_id');
        $article->save();
    }

}