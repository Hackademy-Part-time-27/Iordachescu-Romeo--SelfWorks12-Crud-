<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Mail\NewArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        /*Article::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);*/

        $article = Article::create($request->all());

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = uniqid('article_') . '.' . $request->file('image')->extension();

            $path = $request->file('image')->storeAs('public/articles', $fileName);

            $article->image = $path;

            $article->save();

        }

        Mail::to('admin@example.com')->send(new NewArticle($article->title));
        
        return redirect()->back()->with(['success' => 'Articolo creato correttamente.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect()->back()->with(['success' => 'Articolo modificato correttamente.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with(['success' => 'Articolo cancellato correttamente.']);
    }
}
