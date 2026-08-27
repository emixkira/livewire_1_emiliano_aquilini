<div class="card review-card h-100">

    <img
        src="{{ asset('storage/' . $article->image) }}"
        class="card-img-top review-image"
        alt="{{ $article->title }}"
    >

    <div class="card-body">

        <div class="d-flex justify-content-between mb-2">

            <span class="review-type">
                {{ $article->type }}
            </span>

            <span class="review-rating">
                {{ $article->rating }}/10
            </span>

        </div>

        <h5 class="card-title">
            {{ $article->title }}
        </h5>

        <p class="review-genre">
            {{ $article->genre }}
        </p>

        <p class="community-card-rating">
            Community:
            {{ $article->community_rating }}
        </p>

        <p class="card-text">
            {{ \Illuminate\Support\Str::limit($article->description, 110) }}
        </p>

        <a
            href="{{ route('articles.show', $article) }}"
            class="btn btn-screen"
        >
            Leggi recensione
        </a>

    </div>

</div>