<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function create()
    {
        $tags = Tag::all();

        return view('articles.create', [
            'tags' => $tags
        ]);
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();

        $data['image'] = $request
            ->file('image')
            ->store('articles', 'public');

        $article = Article::create($data);

        if ($request->tags) {
            $article->tags()->attach($request->tags);
        }

        return redirect()
            ->route('articles.index')
            ->with('success', 'Recensione pubblicata correttamente!');
    }

    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article)
    {
        $tags = Tag::all();

        return view('articles.edit', [
            'article' => $article,
            'tags' => $tags
        ]);
    }

    public function update(
        UpdateArticleRequest $request,
        Article $article
    ) {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);

            $data['image'] = $request
                ->file('image')
                ->store('articles', 'public');
        }

        $article->update($data);

        $article->tags()->sync(
            $request->tags ?? []
        );

        return redirect()
            ->route('articles.show', $article)
            ->with('success', 'Recensione modificata correttamente!');
    }

    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->image);

        $article->tags()->detach();

        $article->delete();

        return redirect()
            ->route('articles.index')
            ->with('success', 'Recensione eliminata correttamente!');
    }
}