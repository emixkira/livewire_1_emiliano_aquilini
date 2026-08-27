@extends('layouts.app')

@section('title', 'Tag')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-md-8">

                <div class="form-box">

                    <p class="section-label">
                        Tag
                    </p>

                    <h1>
                        Crea un nuovo tag
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
                        action="{{ route('tags.store') }}"
                        class="mb-5"
                    >

                        @csrf

                        <div class="mb-3">

                            <label
                                for="name"
                                class="form-label"
                            >
                                Nome
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                            >

                        </div>

                        <button
                            class="btn btn-screen"
                            type="submit"
                        >
                            Crea tag
                        </button>

                    </form>


                    @if ($tags->count() > 0)

                        <h2 class="h4">
                            Tag disponibili
                        </h2>

                        @foreach ($tags as $tag)

                            <span class="tag-badge">
                                {{ $tag->name }}
                            </span>

                        @endforeach

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>

@endsection