<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function create()
    {
        $tags = Tag::all();

        return view('tags.create', [
            'tags' => $tags
        ]);
    }

    public function store(StoreTagRequest $request)
    {
        Tag::create(
            $request->validated()
        );

        return redirect()
            ->route('tags.create')
            ->with('success', 'Tag creato correttamente!');
    }
}