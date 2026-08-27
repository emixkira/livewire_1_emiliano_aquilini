@extends('layouts.app')

@section('title', 'Recensioni')

@section('content')

<section class="py-5">

    <div class="container">

        <p class="section-label">
            Archivio
        </p>

        <h1 class="mb-4">
            Tutte le recensioni
        </h1>

        @if ($articles->count() > 0)

            <div class="row g-4">

                @foreach ($articles as $article)

                    <div class="col-12 col-md-6 col-lg-4">

                        <x-article-card :article="$article" />

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty-box">

                <h2>
                    Nessuna recensione
                </h2>

                <p>
                    Non è ancora stata pubblicata nessuna recensione.
                </p>

                <a
                    href="{{ route('articles.create') }}"
                    class="btn btn-screen"
                >
                    Crea la prima
                </a>

            </div>

        @endif

    </div>

</section>

@endsection