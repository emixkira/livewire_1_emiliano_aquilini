@extends('layouts.app')

@section('title', 'Modifica recensione')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-8">

                <div class="form-box">

                    <p class="section-label">
                        Modifica
                    </p>

                    <h1 class="mb-4">
                        Modifica recensione
                    </h1>


                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <form
                        method="POST"
                        action="{{ route('articles.update', $article) }}"
                        enctype="multipart/form-data"
                    >

                        @csrf
                        @method('PUT')


                        <div class="mb-3">

                            <label
                                for="title"
                                class="form-label"
                            >
                                Titolo
                            </label>

                            <input
                                type="text"
                                id="title"
                                name="title"
                                class="form-control"
                                value="{{ old('title', $article->title) }}"
                            >

                        </div>


                        <div class="mb-3">

                            <label
                                for="type"
                                class="form-label"
                            >
                                Tipo
                            </label>

                            <select
                                id="type"
                                name="type"
                                class="form-select"
                            >

                                <option
                                    value="Film"
                                    {{ old('type', $article->type) == 'Film' ? 'selected' : '' }}
                                >
                                    Film
                                </option>

                                <option
                                    value="Serie TV"
                                    {{ old('type', $article->type) == 'Serie TV' ? 'selected' : '' }}
                                >
                                    Serie TV
                                </option>

                            </select>

                        </div>


                        <div class="mb-3">

                            <label
                                for="genre"
                                class="form-label"
                            >
                                Genere
                            </label>

                            <input
                                type="text"
                                id="genre"
                                name="genre"
                                class="form-control"
                                value="{{ old('genre', $article->genre) }}"
                            >

                        </div>


                        <div class="mb-3">

                            <label
                                for="rating"
                                class="form-label"
                            >
                                Voto
                            </label>

                            <input
                                type="number"
                                id="rating"
                                name="rating"
                                min="1"
                                max="10"
                                class="form-control"
                                value="{{ old('rating', $article->rating) }}"
                            >

                        </div>


                        <div class="mb-3">

                            <label
                                for="description"
                                class="form-label"
                            >
                                Recensione
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                rows="7"
                                class="form-control"
                            >{{ old('description', $article->description) }}</textarea>

                        </div>


                        <div class="mb-3">

                            <label
                                for="image"
                                class="form-label"
                            >
                                Nuova immagine
                            </label>

                            <input
                                type="file"
                                id="image"
                                name="image"
                                class="form-control"
                            >

                        </div>


                        @if ($tags->count() > 0)

                            <div class="mb-4">

                                <p class="form-label">
                                    Tag
                                </p>

                                @foreach ($tags as $tag)

                                    <div class="form-check">

                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="tags[]"
                                            value="{{ $tag->id }}"
                                            id="tag{{ $tag->id }}"
                                            {{ $article->tags->contains($tag->id) ? 'checked' : '' }}
                                        >

                                        <label
                                            class="form-check-label"
                                            for="tag{{ $tag->id }}"
                                        >
                                            {{ $tag->name }}
                                        </label>

                                    </div>

                                @endforeach

                            </div>

                        @endif


                        <button
                            type="submit"
                            class="btn btn-screen"
                        >
                            Salva modifiche
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection