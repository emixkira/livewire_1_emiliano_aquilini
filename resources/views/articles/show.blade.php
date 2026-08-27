@extends('layouts.app')

@section('title', $article->title)

@section('content')

<section class="py-5">

    <div class="container">

        <div class="row g-5">

            <div class="col-12 col-lg-5">

                <img
                    src="{{ asset('storage/' . $article->image) }}"
                    class="detail-image"
                    alt="{{ $article->title }}"
                >

            </div>

            <div class="col-12 col-lg-7">

                <p class="section-label">
                    {{ $article->type }}
                </p>

                <h1>
                    {{ $article->title }}
                </h1>

                <p class="detail-info">
                    {{ $article->genre }}
                    ·
                    Voto recensione:
                    {{ $article->rating }}/10
                </p>

                <p class="community-info">
                    Punteggio community:
                    {{ $article->community_rating }}
                </p>

                @if ($article->tags->count() > 0)

                    <div class="mb-4">

                        @foreach ($article->tags as $tag)

                            <span class="tag-badge">
                                {{ $tag->name }}
                            </span>

                        @endforeach

                    </div>

                @endif

                <p class="detail-description">
                    {{ $article->description }}
                </p>

                <div class="mt-4">

                    <a
                        href="{{ route('articles.edit', $article) }}"
                        class="btn btn-screen"
                    >
                        Modifica
                    </a>

                    <form
                        method="POST"
                        action="{{ route('articles.destroy', $article) }}"
                        class="d-inline"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-outline-danger"
                        >
                            Elimina
                        </button>

                    </form>

                </div>

            </div>

        </div>


        <div class="row justify-content-center mt-5">

            <div class="col-12 col-lg-8">

                <livewire:counter :article="$article" />

            </div>

        </div>

    </div>

</section>

@endsection