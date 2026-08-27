@extends('layouts.app')

@section('title', 'Nuova recensione')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-8">

                <div class="form-box">

                    <p class="section-label">
                        Nuova recensione
                    </p>

                    <h1 class="mb-4">
                        Crea una recensione
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
                        action="{{ route('articles.store') }}"
                        enctype="multipart/form-data"
                    >

                        @csrf


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
                                value="{{ old('title') }}"
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

                                <option value="">
                                    Seleziona
                                </option>

                                <option value="Film">
                                    Film
                                </option>

                                <option value="Serie TV">
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
                                value="{{ old('genre') }}"
                            >

                        </div>


                        <div class="mb-3">

                            <label
                                for="rating"
                                class="form-label"
                            >
                                Voto da 1 a 10
                            </label>

                            <input
                                type="number"
                                id="rating"
                                name="rating"
                                min="1"
                                max="10"
                                class="form-control"
                                value="{{ old('rating') }}"
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
                            >{{ old('description') }}</textarea>

                        </div>


                        <div class="mb-3">

                            <label
                                for="image"
                                class="form-label"
                            >
                                Immagine
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
                            Pubblica recensione
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection