@extends('layouts.app')

@section('title', 'ScreenRate')

@section('content')

<header class="hero-section">

    <div class="container">

        <div class="row align-items-center hero-row">

            <div class="col-12 col-lg-8">

                <p class="section-label">
                    Film & Serie TV
                </p>

                <h1 class="hero-title">
                    Guarda.
                    <span>Recensisci.</span>
                    Condividi.
                </h1>

                <p class="hero-text">
                    ScreenRate è uno spazio dedicato
                    alle recensioni di film e serie TV.
                    Scopri nuovi titoli e condividi
                    la tua opinione.
                </p>

                <a
                    href="{{ route('articles.index') }}"
                    class="btn btn-screen me-2"
                >
                    Esplora recensioni
                </a>

                <a
                    href="{{ route('articles.create') }}"
                    class="btn btn-outline-light"
                >
                    Scrivi recensione
                </a>

            </div>

        </div>

    </div>

</header>

@if ($articles->count() > 0)

<section class="py-5">

    <div class="container">

        <p class="section-label">
            Ultime pubblicazioni
        </p>

        <h2 class="mb-4">
            Recensioni recenti
        </h2>

        <div class="row g-4">

            @foreach ($articles as $article)

                <div class="col-12 col-md-6 col-lg-4">

                    <x-article-card :article="$article" />

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif

@endsection