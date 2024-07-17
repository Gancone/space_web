<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        foreach ($category->articles as $article) {
            if (!$article->category) {
                dd($article); // Questo mostrerà l'articolo che manca di categoria
            }
        }

        return view('article.byCategory', ['articles' => $category->articles, 'category' => $category]);
    }
}
