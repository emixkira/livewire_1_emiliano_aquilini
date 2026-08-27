<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Counter extends Component
{
    public Article $article;

    public $count = 0;

    public function mount(Article $article)
    {
        $this->article = $article;

        $this->count = $article->community_rating;
    }

    public function increment()
    {
        $this->count++;

        $this->article->update([
            'community_rating' => $this->count
        ]);
    }

    public function decrement()
    {
        $this->count--;

        $this->article->update([
            'community_rating' => $this->count
        ]);
    }

    public function incrementBy($value)
    {
        $this->count += $value;

        $this->article->update([
            'community_rating' => $this->count
        ]);
    }

    public function decrementBy($value)
    {
        $this->count -= $value;

        $this->article->update([
            'community_rating' => $this->count
        ]);
    }

    public function resetCounter()
    {
        $this->count = 0;

        $this->article->update([
            'community_rating' => 0
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}