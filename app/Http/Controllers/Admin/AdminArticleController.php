<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Manager\ArticleManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class AdminArticleController extends Controller
{
    private $articleManager;

    public function __construct(ArticleManager $articleManager) 
    {
        $this->articleManager = $articleManager;
    }

    public function index()
    {
        return view('admin.article.index', [
            'articles' => Article::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.article.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article();
        $this->articleManager->build($article, $request);
        return redirect()->route('admin.article.index')->with('success', "L'article a bien été créé !"); 
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('admin.article.index')->with("success", "L'article a bien été supprimé !");
    }

    public function edit($id)
    {
        return view('admin.article.edit', [
            'article' => Article::find($id),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $article =  Article::find($id);
        $this->articleManager->build($article, $request);
        return redirect()->route('admin.article.index')->with('success', "L'article a bien été modifié !");
    }
}
