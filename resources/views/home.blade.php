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
                </p>

            </div>

        </div>

    </div>

</header>


<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-md-8 col-lg-6">

                <livewire:counter />

            </div>

        </div>

    </div>

</section>

@endsection